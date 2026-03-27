# Project Report: VetCare

## 1. Introduction
VetCare is an innovative web-based platform dedicated to transforming pet healthcare management, particularly focusing on addressing the lack of immediate veterinary access in rural and remote regions. The system creates a centralized ecosystem connecting pet owners with veterinary professionals and essential resources.

## 2. Problem Statement
Many regions, specifically rural areas, lack the necessary infrastructure for prompt pet healthcare. Owners face significant challenges:
- Difficulty in locating nearby and available veterinary services.
- Absence of a centralized, secure system for tracking pet medical histories.
- Limited access to preventive care information.
- Delays in disease diagnosis, exacerbating health issues in animals.

## 3. Existing System
Current systems are either highly fragmented or entirely manual. Pet owners typically rely on word-of-mouth or unorganized directories to find vets, and they keep medical records in physical paper formats which are prone to damage and loss.

## 4. Proposed System
VetCare introduces a comprehensive digital solution that digitizes pet healthcare management. It offers:
- A directory and search functionality for veterinary services.
- Digital profile creation and health record tracking for individual pets.
- Integration of an AI-powered module for preliminary animal disease prediction.
- Secure, cloud-based data and document management via Supabase.

## 5. Objectives
- Improve accessibility to veterinary care for rural pet owners.
- Digitize and secure pet health records for seamless tracking and updates.
- Provide a user-friendly interface that requires minimal technical knowledge.
- Deliver an automated, initial disease prediction mechanism to prompt owners to seek professional care faster.

## 6. Methodology
The project follows an Agile development methodology, ensuring continuous iteration and testing of fundamental features. The development focuses first on the core web application (PHP/MySQL) and incrementally integrates advanced functionalities like the machine learning backend (Python/Flask) for disease predictions.

## 7. System Architecture
The platform is built on a standard Client-Server architecture:
- **Client Tier:** HTML, CSS, JavaScript (Handles user interaction and presentation).
- **Application Logic Tier:** PHP (authentication, CRUD operations) and Python/Flask (AI predictions).
- **Data Tier:** MySQL (relational data like users, pets, logs) and Supabase (blob storage for images).

## 8. Database Design
The relational database revolves around several core entities:
- **Users Table:** Stores credentials, roles (admin, owner), and contact info.
- **Pets Table:** Stores pet details (name, breed, age) and a foreign key linking to the `Users` table.
- **Health Records Table:** Contains vaccination logs, medical history, and links to both `Pets` and attached documents in Supabase.

*(Entity Relationship: A User can have multiple Pets (1:N). A Pet can have multiple Health Records (1:N).)*

## 9. Results
The platform successfully enables users to register, log in, manage pet profiles, securely store pet images, and receive AI-driven preliminary disease insights.

## 10. Conclusion
VetCare effectively proves that a centralized, digital pet healthcare platform can bridge the gap between pet owners and quality veterinary care, increasing survival rates and health standards for pets in underserved areas.
