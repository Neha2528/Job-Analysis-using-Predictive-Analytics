# Job-Analysis-using-Predictive-Analytics
•	**Phase I** - Login & Validation: In this phase, the user has to first register himself and then login in our system. For verification of the user, the register form filled by the user gets entered directly in our xampp database. As we have used php for linking our web api with the database, validation of the user is done using php file with an if condition given by us. Therefore, authorized user can only access with their correct credentials.
•	**Phase II** – Form Filling : As soon as, the user gets logged in he has to fill a form. The form contains information about user’s personal information, ssc, hsc/diploma, semester’s information, skills, etc. The information filled by the user gets entered directly in our xampp database also will be our input for our knime model.
•	**Phase III** – Analytics : The data is feed into the model as tables. The data is mined, analyzed and visualized using Knime Analytics Tool. We have used a comparative study model which compares Decision-Tree model as well as Random-forest model. We have compared the accuracy by using confusion matrix. The result is visualized using sunburst chart which shows the records of the student whose stream is predicted successfully. The confusion matrix which shows that the current accuracy is 66.6%.
•	**Phase IV** – Quiz : As soon as the user enters his credentials he is directed into our quiz page where he can give quiz as per his interest. Our page has quiz of all the computer engineering core subjects which contains 5 questions. He is free to access and give quizzes of any topic as many time as you want. The total timer is 75secs. Every question is given 15 seconds to answer. If the user gives a correct answer the timer will incrementally decrease and if the user gives a wrong answer the timer will be decreased by 15 seconds of the current timer value. The user has to answer all the questions the timer will go into negative values if the user exceeds the time given. After giving the quiz you have to enter initials then you can view your scores as well as others and can see yourself where you stand in the crowd. The scores will be in percentage. You can click on the go back button to give another quiz as per your will. For evaluation purpose we have kept a threshold of 60% for individual quiz.
•	**Phase V** – Suggestions :  The threshold set by us in the system is 60%. If the user gets evaluated below 60%. He will be given a suggestion list of two set of links. Firstly, all freely available website links of the subject in which he fails. Secondly, the YouTube links of good channels. The study material is usually scattered, our system has it in one place so that the user need not perform a search for any topic. Also, we have given an option depending on the user interest he can learning using videos or can learn by reading. Hence, the user can use our given suggestion list for self-study and can get prepared and give quiz again and evaluate himself and keep learning.
For the students who acquire scores above 60% they can continue learning and getting advance in a particular area by the suggestion list given by us. The suggestion list contains 2 types of resource. Firstly, the websites who offer free courses for core knowledge of the subject. Secondly, for development of their coding we have listed the coding websites who have many exercises, assignments for any programming language user wishes to learn. These websites not only train the user from scratch but also builds their programming skills. Hence, our system aims for the students over all development and pushes them to keep learning more. Also, keeping in mind the user’s faults and errors opens a lot of resources and option to explore.

Technologies: HTML, CSS, Javascript, analytics Knime Analytics Tool

## Flow-Chart
![image](https://user-images.githubusercontent.com/64465272/126047261-0464e361-b008-43d3-abd9-27411faa71a4.png)
![image](https://user-images.githubusercontent.com/64465272/126047262-f1f4d3be-2d98-491a-96c6-cc47327ca5ec.png)
# Screen Shots
![image](https://user-images.githubusercontent.com/64465272/126047268-7f6037e2-bad2-4db6-b0b3-bb9ac593808d.png)
![image](https://user-images.githubusercontent.com/64465272/126047269-5e76ca86-6647-40bc-a080-fb6bc047bacf.png)
![image](https://user-images.githubusercontent.com/64465272/126047271-8216366e-f3f5-48a5-a1d5-e42dd5d057e5.png)
![image](https://user-images.githubusercontent.com/64465272/126047276-26538859-7035-4b28-9601-85d4abc9eed7.png)
![image](https://user-images.githubusercontent.com/64465272/126047278-6d17216f-f53c-4b92-9f11-d26b20191d20.png)
![image](https://user-images.githubusercontent.com/64465272/126047281-d181d6f9-0597-4e1a-a76f-b26588ce595f.png)
![image](https://user-images.githubusercontent.com/64465272/126047288-a3b0b6d0-ea6b-4679-80ad-cb3de802d292.png)
![image](https://user-images.githubusercontent.com/64465272/126047289-eb68b6b4-c66a-4249-a030-626a7a04e4b4.png)
![image](https://user-images.githubusercontent.com/64465272/126047293-48206694-9534-47c4-812f-65259d8f2108.png)
![image](https://user-images.githubusercontent.com/64465272/126047294-9e6eed48-1bf5-4b85-9a90-4cf27aeb05a4.png)

## Knime Tool 
![image](https://user-images.githubusercontent.com/64465272/126047299-7ae5a621-15a4-49a4-8b5d-68e739c40e80.png)
![image](https://user-images.githubusercontent.com/64465272/126047300-deeb39c4-b875-462c-8aa1-2c91ee4ca193.png)
![image](https://user-images.githubusercontent.com/64465272/126047302-5d6772cb-29fd-4f67-846a-18609c3f78d7.png)
![image](https://user-images.githubusercontent.com/64465272/126047304-cbc63575-3133-4acc-a1db-09bd471b953c.png)
