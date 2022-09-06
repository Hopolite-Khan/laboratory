
Draft 
I want to build system ( saas system) that system can the laboratory use my system and i have everything about that from design and everything
So the system contains accounts 
1- super admin ( me ) : i can do everything in the system and if they not pay subscription I can’t stop everything 
2- admin: can do anything but not like super admin ( this user what i give to he make subscribe with me and he can make other accounts) 
3- doctors ( I have screenshots for that and i will explain) 
4- accountant ( i have screen for that ) 
5- specialist ( same doctor account but he can’t send the results)
6- Reception or operator ( normal option) i will explain because it is normal user

There is 2 accounts 
1- call center 
2 - lab supervisor 
Call center ( can edit the name and have access to report time and the same options in operator 

Lab supervisor ( same specialist but he have the time report to see the time of each sample


When he make appointment he receive message from us with barcode and he go to operator account and he show that to camera on our system ( i will show you ) and he accept the appointment and he pay and print barcode for that 
Then take sample then send to lab 
When the sample come you have first receive from accountant user by barcode ( I have screenshots for that ) if he not accept by accountant the specialist can’t enter in the system 

After that the specialist receive the samples then 
Make Bach of the sample in the system ( i have screenshots for that ) 
Then he created the Bach ( should the samples come arrange in the Bach by barcode on the tube, 
Like if add sample one should coming in the bach number one ) 
Then make the test in the machine and the doctor can send the results ( can send all the results by number of the Bach and they get the results like arranging what was in the bach ) and the doctor can remove samples from the Bach if he want do the test again and not affect on the other

The results come with QR and everything about that





1. we have reservation list 
2. we have hospital booking form 
3. Sample Opreations 
    sample list 
4. booking quotation  


FUNCTIONAL REQUIREMENTS : 
1. must be able to import patients from execl sheets 
2. add reservations 
3. add patients records to system 
4. register hospital to system 
5. register samples and medical tests 
6. system must have outsourcing function 
7. system must generate various kind or reports 
8. system must have authorization and authentication system 



User 


Reservation ID	Sample ID	Test Name	Patient	Mobile No.	Identification ID	Nationality	Hospital	Status	Result	HESN No.

Sechma info 

Table list : 
1. hospitals 
2. patients 
3. Orders 
4. tests 
5. Samples Collections 
6. Services 
7. Appointments 
8. Doctors 




Reservations : 
    reservation_id 
    patient 
    mobile_no 
    hostiptal 
    timestamp 
    paid_amount 
    status -- default : collected , confirmed, analyzed  

Samples 
    smaple_id 
    test_type 
    patient 
    mobile_no 
    id_no 
    nationality 
    collection_time 
    result_time 
    status -- value-range ( sample collected , order-confirmed )


Patient : 
    id 
    name
    mobile 
    identity_id 
    identity_type 
    nationality 
    dob
    birth_date 
    gender 
    passport_number 


Samples_collection 
    id 
    temprature 
    reason_for_testing 
    contact_with_inffected
    symptoms
    had_previous_covid_case 
    is_covid_tested
    collection_time 

test_information 
    id 
    test_type 
    batch_no 
    position_p 
    paid_by 
    hesn_requisition_id 
    hesn_synced_recieve 
    hesn_synced_result 


hi dear jihad 
I have inspected the files you send , I will develop your application exactly same as it is in design. 
The screenshoots and files that you sent to me have no order , can your please explain more. 
I have undrestand 50% of what kind of application you need but 50 other percent is unkown to me. 


To make your work easy let explain a little bit on how an application is made 
first we gather information or get the user requirement about an application 
then we design the database schema , application and front-end(UI/UX design) 
then we code
then test the application 
then deploy it to the servers or a hosting platform. 

the reason I am telling you this is because I want you to know that you don't have to design the application since the most important task for you is to 
TELL ME WHAT KIND OF FUNCTIONALITY YOU EXPECT FROM THE SYSTEM
for example  your system must be able to register patients , register hospitals , collect information about samples , collect information about sample tests and result and generate various reports . 

the information you sent to me is the part of application where you do user management. 

Please Remember that You will have my full support from gathering information till deployment. 
To have good undrestanding between each other and to progress in our work and to achive the our goal of making the best application possible just do what I am telling you to do dear. 

1. First I will create a questionary where you can answer those questions in details. this questionary will be based on informations your sent to me before. 
2. Second please explain your daily work-flow in the Lab that you are working for example what kind of task has been carried out every day in the Lab that you want to automate using application. 
3. Third If you can not express yourself fully in english please write it in arabic in a document and sent it to me, I will use google translate to undrestand. 
4. 

