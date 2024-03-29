<!DOCTYPE html>
<html>

<head>
    <title>Landing Page</title>
    <link href="css/HomePage.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    include 'components/navbar.html'
        ?>
    <div id="first_screen" class="full_screen">
        <h1 class="tracking-in-expand">
            Your child's growth
        </h1>
        <div>
            <nav>
                <ul>
                    <a href="#second_screen" class="lm_btn">
                        <li>
                            Learn more
                            <span></span><span></span><span></span><span></span>
                        </li>
                    </a>
                </ul>
            </nav>
            <nav>
                <ul>
                    <a href="CreateAccount.html" class="ca_btn">
                        <li>
                            Create account
                            <span></span><span></span><span></span><span></span>
                        </li>
                    </a>
                </ul>
            </nav>
        </div>
    </div>

    <!-- <div class="container">
        <a href="#" class="toggleBox">
            <span class="icon"></span>
        </a>
        <ul class="navItems">
            <li>
                <a href="#">
                    <i class="fa fa-home" style="--i:1"></i>
                    <span style="--g:1">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-about" style="--i:2"></i>
                    <span style="--g:2">About</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-something" style="--i:3"></i>
                    <span style="--g:3">Something</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-contact" style="--i:4"></i>
                    <span style="--g:4">Contact</span>
                </a>
            </li>
        </ul>
    </div>

    <script>
        var toggleClick = document.querySelector('.toggleBox');
        var container = document.querySelector('.container');
        toggleClick.addEventListener('click', () => {
            toggleClick.classList.toggle('active');
            container.classList.toggle('active');
        });
    </script> -->

    <!-- <button class="learn_more_button">Learn More!</button> -->
        
    <div id="second_screen" class="full_screen">
        <div class="row">
            <div class="col">
                <h1>The manager</h1>
                <p> 
                    Empowering Parents. Nurturing Children. Collecting Memories. Building Futures.  
                </p>
            </div>
            <div class="card-container">
                <div class="card card1">
                    <h3>Empowering Parents</h3>
                    <p>Helping parents keep track of food and sleep schedules of their children through just a click.</p>   
                </div>
                <div class="card card2">
                    <h3>Nurturing Children</h3>
                    <p>The children will benefit from the parents' better organization, because this way parents will have more time for family time.</p>      
                </div>
                <div class="card card3">
                    <h3>Collecting Memories</h3> 
                    <p>A great way to store and visualize all beautiful memories made throughout the children's development process.</p>     
                </div>
                <div class="card card4">
                    <h3>Building Futures</h3>   
                    <p>Creating an organized way of keeping track of all the information about the children, such that ...</p>   
                </div>
            </div>
        </div>
    </div>

    <div id="third_screen" class="full_screen">
       
    </div>
</body>

</html>