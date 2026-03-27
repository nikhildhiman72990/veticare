# System Architecture

## Overview
VetCare employs a robust multi-tier architecture to effectively separate concerns, ensuring scalability and maintainability. It seamlessly integrates a traditional LAMP/WAMP stack alongside a Python-based microservice for Machine Learning predictions.

## Architecture Flow Diagram

```text
[ Client Browser ]
        |
        | (HTTP/HTTPS Requests)
        v
+-------------------------------+
|       Frontend Layer          |
|  (HTML, CSS, JS, Bootstrap)   |
+---------------+---------------+
                |
                | (Form Submissions / AJAX Calls)
                v
+===============================+
|        Backend Layer          |
+---------------+---------------+
| PHP Server    | Flask API     |
| (Auth, CRUD,  | (AI Disease   |
|  User logic)  |  Prediction)  |
+-------+-------+-------+-------+
        |               |
   (SQL)|               |(JSON)
        v               v
+-------+-------+-------+-------+
|        Database Layer         |
+---------------+---------------+
| MySQL DB      | Supabase      |
| (Relational)  | (Blob/Images) |
+---------------+---------------+
```

## Flow Explanation

1. **Frontend (User Interface):** 
   - Users access the platform via any standard web browser.
   - HTML/CSS constructs the layouts, while JavaScript handles dynamic styling and client-side form validations.
2. **Backend (Core Logic):**
   - **PHP Application:** Serves as the primary application controller, handling routing, user sessions, form data processing, and interactions with the MySQL database.
   - **Flask Microservice (`app.py`):** Acts as a decoupled AI engine. When disease prediction is required, requests are passed securely to this service, which utilizes the custom trained model (`Animal_Disease_prediction.ipynb` -> exported model) to return predictions.
3. **Database & Storage:**
   - **MySQL:** Stores highly structured and relational data, including `Users`, `Pets`, and their continuous `Health Records`.
   - **Supabase Storage:** Handles heavy binary objects, serving as a scalable storage solution for user uploads (like pet imagery and scanned medical reports), keeping the core MySQL database lightweight and fast.
