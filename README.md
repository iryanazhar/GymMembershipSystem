

## Group Members
- *Member 1*: Iryan Syauqi Bin Azhar (2213601)
- *Member 2*: Nasrun Asri Bin Muhammad (2210479) 
- *Member 3*: Muhammad Altamis Arief Bin Mohd Zahry (2212857) test test
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

1 **Admin**:
- Admin ID (PK)
- Username
- Password
- Role

2.**Membership Package**:
- Package ID (PK)
- Name
- Price

3.**Member**:
- Member ID (PK)
- Name
- Contact Information
- Membership Package ID (FK)
- Join Date
- Status

4.**Class**:
- Class ID (PK)
- Name
- Time
- Duration
- Capacity
- Trainer ID (FK)

5.**Trainer**:
- Trainer ID (PK)
- Name
- Expertise
- Availability

6.**Product**
- Product ID (PK)
- Name
- Description
- Price
- Stock Level

**Relationships**:
- Admin Manages Membership Package (One-to-Many)
- Admin Manages Member (One-to-Many)
- Admin Manages Class (One-to-Many)
- Admin Manages Trainer (One-to-Many)
- Admin Manages Product (One-to-Many)

- Membership Package Has many Members (One-to-Many)
- Member Belongs to Membership Package (Many-to-One)

- Class Is taught by Trainer (Many-to-One)
- Class Has many Members (Many-to-Many)

- Trainer Teaches many Classes (One-to-Many)

Product Managed by Admin (Many-to-One)
![Untitled design](https://github.com/user-attachments/assets/f93a9e3a-51e2-4568-9e41-0c108b7c44ca)



## Sequence Diagram

![Gym Paradise Semenyih](https://github.com/user-attachments/assets/edd3f1e4-8804-4b12-82a8-69129b8022dd)

   

## Mock-up
![Alt text](HOME.png?raw=true)
![Alt text](HOME2.png?raw=true)
![Alt text](HOME3.png?raw=true)
![Alt text](HOME4.png?raw=true)
![Alt text](HOME5.png?raw=true)
![Alt text](HOME6.png?raw=true)
![Alt text](HOME7.png?raw=true)

## Project system captured screen and explanation
1.Homepage
![photo_6071163442762466752_y](https://github.com/user-attachments/assets/ee2a7af5-ef92-4ead-98b7-fdafe590badc)
So this is basically what user can see for the homepage
![photo_6071163442762466751_y (1)](https://github.com/user-attachments/assets/47ea819a-6502-421b-a59d-95eadda09e27)
Footer for our homepage website where information,email,and contact us and our loacation

2.Log In
![Login](https://github.com/user-attachments/assets/27b9ab22-29d6-44c1-a72d-4b4ece1c1f16)
This is our Log In Page, where the admin can log in into the system.

3.Register
![asz](https://github.com/user-attachments/assets/07be9bad-7e90-4976-823f-4e01dc269c0b)
For admin who does not register yet. They can do so in this page. After successfully register. They can log in.

4.Package Page
![photo_6071163442762466749_y](https://github.com/user-attachments/assets/cecb2af7-ea52-438f-8591-f1226fa85baf)
this is the package page where all the information about the package will appear and the admin can add package

![photo_6071163442762466748_y](https://github.com/user-attachments/assets/0c664382-eed0-4e30-b4dc-7f32f487ad42)
When any package is added this is how it looks and user can also search anything in the package page

![photo_6071163442762466747_y](https://github.com/user-attachments/assets/9b2665aa-b21f-4d59-a9e0-d80acfc98d5b)
This is what user can see as form for adding new package or editting any package

5.Classes Page

6.Members Page
![image](https://github.com/user-attachments/assets/e05229a3-f8f9-47fa-9ede-3082c775a8b2)
This is the member's page, where it will display the details of our gym members. There's a button to add new members.
![image](https://github.com/user-attachments/assets/8166169f-8fb7-4230-8eb2-d1391fee9706)
This page shows form to create and add new members.
![image](https://github.com/user-attachments/assets/02b2740e-6981-4c99-a373-9cc6f8902930)
This is an example of when a member has been created. There's also edit and remove buttons if admin wants to update or remove a member.
![image](https://github.com/user-attachments/assets/6860287d-9fe6-4d2d-870a-9c2ae54acf49)
This page shows form to edit members.

7.Trainers Page
![TRAINERS](https://github.com/user-attachments/assets/cdebe493-277d-4787-8a8b-506bacea2060)
This is the trainer's page, where all the details of our trainers will be in this page. 

8.Products Page
![no1](https://github.com/user-attachments/assets/07766f07-9587-4ab0-b589-204a11ebb9a0)
This page display the list of produt that available. (No product insert version)
![no2](https://github.com/user-attachments/assets/aa394afa-1a13-4fc8-8b5e-a80ca2523828)
This page display the list of product that available. (Product successfully insert version)
![cp](https://github.com/user-attachments/assets/8eeca226-8864-4c7c-bdff-4e7f30c5fc1f)
This page shows form to create a new product details.
![ep](https://github.com/user-attachments/assets/13ab4421-7214-405f-bde4-b98d1181c4fb)
This page shows form to edit product details.


## Challenges of Developing the Application
1. Requirement Analysis
- We might struggle to balance the scope, potentially making the system too complex or too simplistic for the project's level.
2. Technical Implementation
- Error Handling and Debugging: Debugging system errors, especially in complex functionalities like class bookings or payment validation, can be time-consuming.
3. Time Constraints
- Time Management: Balancing the development process with other academic commitments can lead to rushed or incomplete features.
4. Division of Tasks
- Unequal Workload: Some team members may feel overwhelmed if tasks are not distributed evenly or fairly.
- Skill Gaps: Not all team members may have the same level of technical expertise, leading to an imbalance in contributions.
5. Communication
- Lack of Coordination: Poor communication can result in misunderstandings, redundant work, or missing project deadlines.
- Conflicting Ideas: Team members may have different visions or approaches, leading to disagreements on design or implementation.
- Response Delays: Slow responses in group chats or meetings can stall progress.

## References
1. **Oganda, P. A., & Terizla, R. F. (2024). Strategic management practices in dynamic business environments. Aptisi Transactions on Management (ATM), 8(1), 24–31. https://doi.org/10.33050/atm.v8i1.2192**:
2. **DocuPhase. (2023, October 4). Unmasking the scary truths about manual processes. DocuPhase Blog. https://www.docuphase.com/blog/unmasking-the-scary-truths-about-manual-processes**:



git pull origin main
