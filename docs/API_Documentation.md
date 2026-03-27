# VetCare API Documentation

Below is a reference guide for the core endpoints and functionalities implemented in the VetCare system.

## 1. Authentication

### `POST /login.php`
- **Description:** Authenticates a user and starts a secure session.
- **Parameters:**
  - `email` (string, required)
  - `password` (string, required)
- **Response:** Redirects to `home.php` on success or returns an error message.

### `POST /register.php`
- **Description:** Registers a new pet owner or user on the platform.
- **Parameters:**
  - `name` (string, required)
  - `email` (string, required)
  - `password` (string, required)
  - `phone` (string, optional)
- **Response:** Redirects to `login.php` on successful creation.

## 2. Pet Management

### `POST /manage_pets.php` (Add Pet)
- **Description:** Adds a new pet profile under the currently logged-in user.
- **Parameters:**
  - `pet_name` (string, required)
  - `breed` (string, required)
  - `age` (integer, required)
  - `species` (string, required)
- **Response:** Reloads page with success indicator and the updated pet list.

### `GET /manage_pets.php` (Fetch Pets)
- **Description:** Retrieves all pets associated with the active user session.
- **Response:** Renders HTML containing the list of pets and their details.

## 3. Pet Health Records

### `POST /pet_record.php` (Add Record/Upload Images)
- **Description:** Adds medical logs and handles the upload of pet images/documents to Supabase.
- **Parameters:**
  - `pet_id` (integer, required)
  - `record_details` (string, required)
  - `file` (multipart/form-data, optional)
- **Response:** Records inserted into the MySQL database; images successfully uploaded via Supabase endpoints.

## 4. AI Disease Prediction

### `POST http://localhost:5000/predict` (Flask API)
- **Description:** Accepts symptoms/features and predicts potential animal diseases.
- **Content-Type:** `application/json`
- **Parameters:** Features array matching the trained ML model.
- **Response:** JSON object containing the predicted disease and confidence score.
