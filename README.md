<h1 align="center">Hi 👋, here we have the ChiM (Childcare Manager)</h1>
<h3 align="center">Developed this platform in the fourth semester of the faculty.</h3>

---

<h3 align="left">Here we have the requirement:</h3>

(RO) Sa se dezvolte o aplicatie Web care sa permita utilizatorilor autentificati -- eventual, familii sau cupluri de persoane -- gestiunea resurselor privitoare la ingrijirea unui copil (de la bebelus si copil de varsta prescolara la puber). Se vor viza calendarul hranirii, al orelor de somn, diverse resurse multimedia (fotografii, filme, inregistrari audio,...) privind evolutia copilului, istoricul medical, relationarea cu alti copii (e.g., verisori, colegi de gradinita/scoala) etc. Aplicatia va oferi o vedere cronologica (timeline) a celor mai importante momente surprinse referitoare la fiecare copil in parte, cu posibilitatea partajarii celor mai semnificative momente in cadrul unei aplicatii sociale sau via un flux de stiri RSS. Functionalitatile sistemului vor fi expuse si prin intermediul unui API Web REST/GraphQL. Bonus: adoptarea unor maniere de vizualizare interesanta a dezvoltarii psihosomatice a fiecarui copil ori a unui grup de copii.

(EN) Develop a web application that allows authenticated users -- eventyally, families or couples -- to manage resources related to the care of a child (from baby and preschooler to puberty). The application will target the following: feeding schedule, sleep schedule, various multimedia resources (photos, videos, audio recordings,...) regarding the child's development, medical history, relationship with other children (e.g., cousins, kindergarten/school classmates) etc. The application will provide a chronological view (timeline) of the most important moments captured for each child, with the possibility of sharing the most significant moments within a social application or via an RSS news feed. The system functionalities will also be exposed through a REST/GraphQL Web API. Bonus: Adoption of interesting ways of visualizing the psychosomatic development of each child or a group of children.

---

<h3 align="left">Installation:</h3>

1. Clone the current repositoy! Now you have all the projects avalable!</br>
 Type command: ```git clone git@github.com:AndromedaOMA/Web-Tech-Project.git```
2. Change the current directory to the project directory.</br>
 Type command: ```cd .\Web-Tech-Project```
4. Open the admin page of the MySQL and import tha database structure located here: .</br>
6. Open the localhost in any browser.</br>


# How does it work?

- In the Start interface you will see a field for entering the mathematical equation.
- After entering the expression, press the "Calculate" button.
- Wait for the magic to happen! The ``Evaluator of Mathematical Expressions`` will give you the infix expression, the postfix one and not ultimately the result of the inserted expression.
  
-RULES!

- The expression given must contain only digits, linked (no spaces)
- The supported functions and operations are multiplication, division, addition, subtraction.
- Example of expression: 3-8/2*3+6/2-9*5+1

---

<h3 align="left">Structure:</h3>

- Here we have the menu:
![image](https://github.com/AndromedaOMA/Rust-Language---Projects/assets/116078879/201c45a7-3597-4052-bf4d-0767b92e7044)

<h3 align="left">Here are some examples:</h3>

- The first one:
![image](https://github.com/AndromedaOMA/Rust-Language---Projects/assets/116078879/d2fc8d9e-1714-4dc6-99cc-422bb4eb5083)

- The second one:
  
![image](https://github.com/AndromedaOMA/Rust-Language---Projects/assets/116078879/e9c0dc0c-ced3-428e-8343-d7f7f3a845a2)

- The third one:

![image](https://github.com/AndromedaOMA/Rust-Language---Projects/assets/116078879/d6de001a-11bf-44eb-abcb-e5280049c69a)


<h3 align="left">The logic behind the code:</h3>
  Solving the problem consists in applying the conversion from fixed arithmetic expression to its postfixed expression, then we evaluated it using a stack.
  <h5>Example:</h5>
  Consider the expression: exp = “2 3 1 * + 9 -“:</br>
    -> Scan 2, it’s a number, So push it into stack. Stack contains ‘2’.</br>
    -> Scan 3, again a number, push it to stack, stack now contains ‘2 3’ (from bottom to top) </br>
    -> Scan 1, again a number, push it to stack, stack now contains ‘2 3 1’ </br>
    -> Scan *, it’s an operator. Pop two operands from stack, apply the * operator on operands. We get 3*1 which results in 3. We push the result 3 to stack. The stack now becomes ‘2 3’.</br>
    -> Scan +, it’s an operator. Pop two operands from stack, apply the + operator on operands. We get 3 + 2 which results in 5. We push the result 5 to stack. The stack now becomes ‘5’.</br>
    -> Scan 9, it’s a number. So we push it to the stack. The stack now becomes ‘5 9’.</br>
    -> Scan -, it’s an operator, pop two operands from stack, apply the – operator on operands, we get 5 – 9 which results in -4. We push the result -4 to the stack. The stack now becomes ‘-4’.</br>
    -> There are no more elements to scan, we return the top element from the stack (which is the only element left in a stack).</br>
    <h6>So the result becomes -4.</h6>

---

- ⚡ Fun fact **This is my first project made using HTML, CSS and JavaScript language**
