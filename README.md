

## Group Members
- *Member 1*: Iryan Syauqi Bin Azhar (2213601)
- *Member 2*: Nasrun Asri Bin Muhammad (2210479)
- *Member 3*: Muhammad Altamis Arief Bin Mohd Zahry (2212857)
- *Member 4*: Muhammad Iman Hakeem Bin M.D.Khairi (2215605)
- *Member 5*: Nur Ain Binti Mohamad Hisham (2216894)

# Gym Management System for Gym Paradise

## Introduction
The Gym Management System is a web-based application developed to support the operations of Gym Paradise, a rapidly growing fitness center chain. Leveraging cutting-edge technology, the system is designed to streamline administrative tasks, improve member satisfaction, and enhance operational efficiency, ensuring Gym Paradise continues to thrive in the competitive fitness industry. 

With the increasing popularity of health and fitness, Gym Paradise has expanded to multiple branches, offering diverse membership packages, fitness classes, and personal training programs. However, managing the growing number of members, trainers, and schedules manually has become a significant challenge. The Gym Management System addresses these challenges by centralizing all gym operations into a single, user-friendly platform.

The system is designed to simplify administrative tasks, ensure accurate record-keeping, and provide seamless access to essential features. By integrating a centralized web application, Gym Paradise can efficiently manage membership packages, member profiles, class schedules, trainer management, and product inventory, paving the way for continued growth and improved service quality.

Key Features of the Gym Management System:

- *Admin Login*
- *Membership Packages*
- *Member Directory*
- *Class Scheduling*
- *Trainer Profiles*
- *Product Inventory*

The Gym Management System empowers administrators with the tools needed to optimize gym operations while enhancing the member experience. By adopting this innovative solution, Gym Paradise aims to revolutionize fitness management, providing a solid foundation for its continued expansion and success.

## Objectives
1. **Streamline Gym Management Processes**:
   Automate operations like managing membership packages, scheduling   classes, and overseeing trainer availability to reduce manual effort.

2. **Centralize Gym Data Management**:
   Provide a single platform for administrators to manage all aspects of gym operations.

3. **Enhance Operational Efficiency**
   Streamline the creation, updating, and deletion of membership packages, trainers, classes, and products.

4. **Facilitate Inventory & Product Management**:
   Enable gym administrators to manage gym-related products, ensuring availability for customers.

5. **Provide Scalability for Growth**:
   Build a system that supports adding new classes, trainers, and products as the gym expands.

6. **Improve Member Experience**:
   Indirectly enhance customer satisfaction by ensuring accurate schedules, availability of trainers, and prompt access to products and services through effective management.

## Features and Functionalities
Features:

1. **Login/Authentication**:
   - Secure login for admins to access and manage all system modules.
   - Authentication and authorization to ensure system security.
2. **Membership Packages**:
   - View, create, edit, and delete gym membership plans.
   - Allow customization of membership plans based on duration and pricing.
3. **Membership Directory**:
   - Register new gym members and maintain a detailed directory of all    members.
   - View and update member profiles, including contact information, membership packages, and join date.
   - Remove inactive or expired memberships.
4. **Class Scheduling**:
   - Create and manage schedules for fitness classes offered by the gym.
   - Allow administrators to view class rosters, timings, and capacities.
   - Update class details such as duration, instructors, or cancellations.
5. **Trainer Profiles**:
   - Add, view, edit, and remove gym trainer profiles.
   - Manage trainer availability, expertise, and schedules.
   - Assign trainers to specific classes or personal training sessions.
6. **Product Inventory**:
   - Manage gym-related products, including equipment, apparel, supplements, and accessories
   - Add, update, and remove products from the inventory.
   - Track product inventory, pricing, and descriptions.
  
System Functionalities:

1. **Admin Features (Login/Authentication)**:
   - User Authentication: Verify admin credentials using secure login mechanisms
   - Authorization: Restrict access to system functionalities based on admin roles.
   - Password Management: Provide options for password resets and updates.
2. **Membership Packages**:
   - Package Management: Add, edit, or delete membership plans with details such as name, duration, and pricing.
   - Package Display: List all available membership packages in an organized manner.
3. **Membership Directory**:
   - Member Registration: Add new members with details like contact information, membership plans, and join dates.
   - Member Profiles: Retrieve detailed member profiles, including package information and contact details.
   - Member Search: Implement search functionality to quickly locate members by name, ID, or package.
   - Profile Updates: Allow admins to edit member details when necessary.
   - Inactive Membership Management: Identify and remove inactive or expired members from the directory.
4. **Class Scheduling**:
   - Class Management: Create, edit, and delete class schedules with details like time, duration, and capacity.
   - Class Assignments: Assign trainers to specific classes based on expertise and availability.
   - Plan Management: View class plan to monitor member enrollments and attendance.
   - Schedule Notifications: Notify members and trainers about updates or cancellations.
5. **Trainer Profiles**:
   - Trainer Management: Add, edit, or remove trainer profiles with details like expertise and availability.
   - Trainer Assignments: Assign trainers to classes or personal training sessions.
   - Schedule Management: Track and update trainer schedules to avoid conflicts.
   - Search and Filter: Enable search by trainer name, expertise, or schedule for efficient management.
6. **Product Inventory**:
   - Inventory Management: Add, update, and remove products like gym equipment, supplements, and accessories.
   - Stock Monitoring: Track stock levels and flag low inventory items for restocking.
   - Product Details: Maintain detailed records of product pricing, descriptions, and availability.

## Entity-Relationship Diagram (ERD)

### Entities and Their Attributes:

1. **Member**
   - **member_id** *(PK)*  
   - **package_id** *(FK)*  
   - **member_name**  
   - **contact_no**  
   - **password**  
   - **gender**  
   - **join_date**  

2. **Package**
   - **package_id** *(PK)*  
   - **package_name**  
   - **duration**  
   - **price**  

3. **Trainer**
   - **trainer_id** *(PK)*  
   - **first_name**  
   - **last_name**  
   - **speciality**  
   - **hire_date**  

4. **Classes**
   - **class_id** *(PK)*  
   - **class_name**  
   - **trainer_id** *(FK)*  
   - **schedule**  
   - **duration**  

5. **Enrollments**
   - **enrollment_id** *(PK)*  
   - **member_id** *(FK)*  
   - **class_id** *(FK)*  
   - **enrollment_date**  

6. **Payments**
   - **payment_id** *(PK)*  
   - **member_id** *(FK)*  
   - **payment_date**  
   - **amount**  
   - **payment_method**  

### Relationships:
1. **Member ↔ Package**
   - A member subscribes to one package. *(1:1 relationship)*  
   - **Foreign Key:** `package_id` in `Member` references `package_id` in `Package`.

2. **Member ↔ Payments**
   - A member can make multiple payments. *(1:N relationship)*  
   - **Foreign Key:** `member_id` in `Payments` references `member_id` in `Member`.

3. **Trainer ↔ Classes**
   - A trainer can teach multiple classes. *(1:N relationship)*  
   - **Foreign Key:** `trainer_id` in `Classes` references `trainer_id` in `Trainer`.

4. **Classes ↔ Enrollments**
   - A class can have multiple enrollments. *(1:N relationship)*  
   - **Foreign Key:** `class_id` in `Enrollments` references `class_id` in `Classes`.

5. **Member ↔ Enrollments**
   - A member can enroll in multiple classes. *(1:N relationship)*  
   - **Foreign Key:** `member_id` in `Enrollments` references `member_id` in `Member`.

## Sequence Diagram


## References

