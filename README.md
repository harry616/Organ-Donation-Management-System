# -Donor-management System 
Overview
This report discusses the result of the work done in development of "Websites for Organ donation on "HTML" and "PHP" Front-end Platform and “My sql” as back-end Platform. At the development of an application PHP provides a good connecting facility between all pages, also the back-end My sql is most important to save all the data related the application.

Queries designed using SQL commands
Alter
ALTER TABLE useraccount ADD CONSTRAINT userID PRIMARY KEY(userID);

Describe
DESCRIBE useraccount;

Insert
INSERT INTO useraccount(userName, passwrd, patientFlag, userID, active) VALUES ('rajeshkumar', 'password', 1, 'rajesh12345', 1);

Select
*SELECT * FROM useraccount;

Update
UPDATE useraccount SET passwrd = 'password123' where userName = 'rajeshkumar';

Order By
SELECT * FROM useraccount ORDER BY 1 ASC;

Group By
SELECT * FROM useraccount GROUP BY active;

Nested
SELECT * FROM useraccount where userName IN (SELECT userName FROM useraccount WHERE active = 0);

Delete
DELETE FROM useraccount WHERE active = 0;

GRAPHICAL USER INTERFACE
The application is very user friendly and uses a GUI interface implemented in PHP and HTML to Communicate with the user. Various features are self – explanatory. Forms are easy to ﬁll in and components can be added, removed and updated very easily through a Single dialog box. List boxes are used to display all the components at once so that user can see all the components of a Particular type at once. One can just select the component and modify and remove the component(based on the access control of the person).

Features Of Application
Features
Clean separation of various components to facilitate easy modiﬁcation and revision.
All the data is maintained in a separate ﬁle to facilitate easy modiﬁcation
All the data required for diﬀerent operations is kept in a separate ﬁle.
Quick and easy saving and loading of database ﬁle
Additional Features
Database optimized to reduce joins.
Constraints and validation of data managed in database as it is a DB project.
SQL injection into the application dealt with.
Minimal changes required in application for DB switch.
PHP PEAR database abstraction along with separate layer for DB connection implemented in Connection.php and DB.php
Only change required in DB change would be to change DB connection string in Connection.php
For a DB change, (sequence/anything equivalent to sequence) needs to be migrated for speciﬁc DB
implemented triggers
Views created for analyst reports.
SYSTEM TESTING
Project Testing
Compilation Test - It was a good idea to do our stress testing early on, because it gave us time to ﬁx some of the unexpected deadlocks and stability problems that only occurred when components were exposed to very high transaction volumes.
Execution Test - This program was successfully loaded and executed. Because of good programming there were no execution errors.
Output Test - The successful output screens are placed in the output screens section.
CONCLUSION
Thus we have successfully implemented organ donation database management which helps us in centralizing the data used for managing the tasks performed in a organ donation we have succefully implemented various functionalities of mysql and php and created the fully functional database management system for organ donation.

Future Enhancement
It is not possible to develop a application that makes all the requirements of the user. User requirements keep on changing.so, Some of the future enhancements that can be done to this system are:

As the technology emerges, it is possible to upgrade the application and can be adaptable to desired environment.
We can also applicable this to Oracle and MySQL instead of SQL Server.
Based on the future security issues, security can be improved using encryption and decryption techniques.
We can also provide administrative tools like Backup, Replication and Linked Server.
Technical Aspects
The application was developed using the LAMP approach, i.e. Linux, Apache, MySQL and PHP.

Linux The project was developed in a Windows environment using Netbeans but is now hosted in Linux environment on the localhost servers. This was possible due to the high level of portability of php code.
PHP PHP is a widely-used general-purpose scripting language that is especially suited for Web development and can be embedded into HTML. All server side code was written in php. As mentioned the design was done in Windows in a WAMP environment and then the code was ported and hosted on Apache in Linux.
Apache The web server used is Apache with the php plugin. Apache again is a very reliable web server on both Windows and Linux and also maintains a very similar interface in both.
Mysql The database system used is MySQL which is an open source RDBMS. It is very light and highly functional. Also with PHP and MySQL being used together very frequently a lot of online support was available.
