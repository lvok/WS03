<?php 
namespace App\Controllers;

use Framework\Database;
use Framework\Validation;
use Framework\Session;
use Framework\Authorization;


class ListingController
{
    protected $db;

    // Initialize database connection
    public function __construct()
    {
     $config = require basePath('Config/db.php');
    $this->db = new Database($config);
    }

    // Display all listings
    public function index()
    {

        $listings = $this->db->Query('SELECT * FROM listings ORDER BY created_at DESC')->fetchAll();


        loadView('listings/index', [
    "listings" => $listings
]);

    }

    // Search listings by keyword and location
    public function search()
    {
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';
        $location = isset($_GET['location']) ? trim($_GET['location']) : '';

        $query = 'SELECT * FROM listings WHERE 1=1';
        $params = [];

        // Filter by keyword (searches title, description, tags, and company)
        if ($keyword !== '') {
            $query .= ' AND (title LIKE :keyword OR description LIKE :keyword OR tags LIKE :keyword OR company LIKE :keyword)';
            $params['keyword'] = '%' . $keyword . '%';
        }

        // Filter by location (searches city and state)
        if ($location !== '') {
            $query .= ' AND (city LIKE :location OR state LIKE :location)';
            $params['location'] = '%' . $location . '%';
        }

        $query .= ' ORDER BY created_at DESC';

        $listings = $this->db->Query($query, $params)->fetchAll();

        loadView('listings/search', [
            'listings' => $listings,
            'keyword' => $keyword,
            'location' => $location
        ]);
    }

    // Show the create listing form
        public function create()
    {
        // Redirect to login if user is not authenticated
        if(!Session::has('user')) {
            return redirect('/WS03/Public/auth/login');
        }

        loadView('listings/create');

    }
    // Show a single listing by ID
    public function show($params)
    {
     $id = $params['id'];

$params = [
    'id' => $id
];

$listing = $this->db->Query('SELECT * FROM listings WHERE id = :id', $params)->fetch();


// Return 404 if listing does not exist
if (!$listing) {
    ErrorController::notFound('Listing not found');
    return;
}

loadView('listings/show', [
    'listing' => $listing
]);   
    }


    // Store a new listing in the database
    public function store()
{
    // Redirect to login if user is not authenticated
    if(!Session::has('user')) {
        return redirect('/WS03/Public/auth/login');
    }
    $allowFields = ['title', 'description', 'salary', 'tags', 'requirements', 'benefits', 'company', 'address', 'city', 'state', 'phone', 'email'];

    $newListingData = array_intersect_key($_POST, array_flip($allowFields));

    $newListingData['user_id'] = Session::get('user')['id'];

    $newListingData = array_map('sanitize', $newListingData);
    
    $requiredFields = ['title', 'description', 'email','city', 'state','company'];

    $errors = [];

    foreach($requiredFields as $field) {
        // Check if required field is empty or invalid
        if (empty($newListingData[$field]) ||
           !Validation::string($newListingData[$field]))
           {
            $errors[$field] = ucfirst($field) . ' is required.';
           }
        }
    // If validation fails, reload form with errors; otherwise, insert into database
    if(!empty($errors)) {
        loadView('listings/create', [
            'errors' => $errors,
            'listing' => $newListingData
        ]);
      
    } else{

        $fields=[];

        foreach($newListingData as $field => $value) {
            $fields[] = $field;
        }
        $fields = implode(', ', $fields);

        $values = []; 
        
        foreach($newListingData as $field => $value) {
           // Convert empty strings to null for database insertion
           if($value === '') {
            $newListingData[$field] = null;
           } 
           $values[]=":" . $field;
        }
        $values = implode(', ', $values);

        $query = "INSERT INTO listings ({$fields}) VALUES ({$values})";

        $this->db->Query($query, $newListingData);

         Session::setFlashMessage('success', 'Listing created successfully');

        redirect('/WS03/Public/listings');


    }

}
    // Delete a listing by ID
    public function destroy($params)
    {
        // Redirect to login if user is not authenticated
        if(!Session::has('user')) {
            return redirect('/WS03/Public/auth/login');
        }

        $id = $params['id'];

        $params = [
            'id' => $id
        ];
        $listing = $this->db->Query('SELECT * FROM listings WHERE id = :id', $params)->fetch();

        // Return 404 if listing does not exist
        if (!$listing) {
            ErrorController::notFound('Listing not found');
            return;
        }


        if(!Authorization::isOwner($listing->user_id)) {
            Session::setFlashMessage('error', 'You are not authorized to delete this listing');
            return redirect('/WS03/Public/listings/' . $listing->id);
        }

        $this->db->Query('DELETE FROM listings WHERE id = :id', $params);


         Session::setFlashMessage('success', 'Listing deleted successfully');

        redirect('/WS03/Public/listings');
    }

    // Show the edit form for a listing
    public function edit($params)
    {
        // Redirect to login if user is not authenticated
        if(!Session::has('user')) {
            return redirect('/WS03/Public/auth/login');
        }
        $id = $params['id'];

        $params = [
            'id' => $id
        ];
        $listing = $this->db->Query('SELECT * FROM listings WHERE id = :id', $params)->fetch();

        // Return 404 if listing does not exist
        if (!$listing) {
            ErrorController::notFound('Listing not found');
            return;
        }

        // Block access if user is not the listing owner
        if(!Authorization::isOwner($listing->user_id)) {
            Session::setFlashMessage('error', 'You are not authorized to edit this listing');
            return redirect('/WS03/Public/listings/' . $listing->id);
        }

        loadView('listings/edit', [
            'listing' => $listing
        ]);   
    }

    // Update an existing listing in the database
    public function update($params)
    {
        // Redirect to login if user is not authenticated
        if(!Session::has('user')) {
            return redirect('/WS03/Public/auth/login');
        }
        $id = $params['id'];

        $params = [
            'id' => $id
        ];
        $listing = $this->db->Query('SELECT * FROM listings WHERE id = :id', $params)->fetch();

        // Return 404 if listing does not exist
        if (!$listing) {
            ErrorController::notFound('Listing not found');
            return;
        }

        // Block access if user is not the listing owner
        if(!Authorization::isOwner($listing->user_id)) {
            Session::setFlashMessage('error', 'You are not authorized to update this listing');
            return redirect('/WS03/Public/listings/' . $listing->id);
        }

        $allowFields = ['title', 'description', 'salary', 'tags', 'requirements', 'benefits', 'company', 'address', 'city', 'state', 'phone', 'email'];

        $updateValues = array_intersect_key($_POST, array_flip($allowFields));
        $updateValues = array_map('sanitize', $updateValues);

        $requiredFields = ['title', 'description', 'email', 'city', 'state', 'company'];

        $errors = [];

        foreach ($requiredFields as $field) {
            // Check if required field is empty or invalid
            if (empty($updateValues[$field]) || !Validation::string($updateValues[$field])) {
                $errors[$field] = ucfirst($field) . ' is required.';
            }
        }

        // If validation fails, reload form with errors; otherwise, update the database
        if (!empty($errors)) {
            loadView('listings/edit', [
                'errors' => $errors,
                'listing' => $listing
            ]);
        } else {
            $updateFields = [];
            foreach (array_keys($updateValues) as $field) {
                $updateFields[] = "{$field} = :{$field}";
            }
            $updateFields = implode(', ', $updateFields);

            $query = "UPDATE listings SET {$updateFields} WHERE id = :id";
            $updateValues['id'] = $id;

            $this->db->Query($query, $updateValues);

           Session::setFlashMessage('success', 'Listing updated successfully');

            redirect('/WS03/Public/listings/' . $id);
        }
    }
}





