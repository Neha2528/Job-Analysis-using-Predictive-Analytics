# Job-Analysis-using-Predictive-Analytics
•	**Phase I** - Login & Validation: In this phase, the user has to first register himself and then login in our system. For verification of the user, the register form filled by the user gets entered directly in our xampp database. As we have used php for linking our web api with the database, validation of the user is done using php file with an if condition given by us. Therefore, authorized user can only access with their correct credentials.
•	**Phase II** – Form Filling : As soon as, the user gets logged in he has to fill a form. The form contains information about user’s personal information, ssc, hsc/diploma, semester’s information, skills, etc. The information filled by the user gets entered directly in our xampp database also will be our input for our knime model.
•	**Phase III** – Analytics : The data is feed into the model as tables. The data is mined, analyzed and visualized using Knime Analytics Tool. We have used a comparative study model which compares Decision-Tree model as well as Random-forest model. We have compared the accuracy by using confusion matrix. The result is visualized using sunburst chart which shows the records of the student whose stream is predicted successfully. The confusion matrix which shows that the current accuracy is 66.6%.
•	**Phase IV** – Quiz : As soon as the user enters his credentials he is directed into our quiz page where he can give quiz as per his interest. Our page has quiz of all the computer engineering core subjects which contains 5 questions. He is free to access and give quizzes of any topic as many time as you want. The total timer is 75secs. Every question is given 15 seconds to answer. If the user gives a correct answer the timer will incrementally decrease and if the user gives a wrong answer the timer will be decreased by 15 seconds of the current timer value. The user has to answer all the questions the timer will go into negative values if the user exceeds the time given. After giving the quiz you have to enter initials then you can view your scores as well as others and can see yourself where you stand in the crowd. The scores will be in percentage. You can click on the go back button to give another quiz as per your will. For evaluation purpose we have kept a threshold of 60% for individual quiz.
•	**Phase V** – Suggestions :  The threshold set by us in the system is 60%. If the user gets evaluated below 60%. He will be given a suggestion list of two set of links. Firstly, all freely available website links of the subject in which he fails. Secondly, the YouTube links of good channels. The study material is usually scattered, our system has it in one place so that the user need not perform a search for any topic. Also, we have given an option depending on the user interest he can learning using videos or can learn by reading. Hence, the user can use our given suggestion list for self-study and can get prepared and give quiz again and evaluate himself and keep learning.
For the students who acquire scores above 60% they can continue learning and getting advance in a particular area by the suggestion list given by us. The suggestion list contains 2 types of resource. Firstly, the websites who offer free courses for core knowledge of the subject. Secondly, for development of their coding we have listed the coding websites who have many exercises, assignments for any programming language user wishes to learn. These websites not only train the user from scratch but also builds their programming skills. Hence, our system aims for the students over all development and pushes them to keep learning more. Also, keeping in mind the user’s faults and errors opens a lot of resources and option to explore.

## Flow-Chart

# Screen Shots
