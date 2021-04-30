<template>

<div v-for="item in projects" :key='item.title' class="container">

    <!-- Page header -->
    <div class="page-header">
        <h2>{{item.title}} </h2>
    </div>
    <!-- /Page header -->

    <!-- Timeline -->
    <div class="timeline">
    
        <!-- Line component -->
        <div class="line text-muted"></div>

        <!-- Separator -->
        <div class="separator text-muted">
            <time>{{item.date}}</time>
        </div>
        <!-- /Separator -->
    
        <!-- Panel -->
        <article class="panel panel-danger panel-outline">
    
            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-heart"></i>
            </div>
            <!-- /Icon -->
    
            <!-- Body -->
            <div class="panel-body">
                <strong>{{item.subtitle}}</strong>.
            </div>
            <!-- /Body -->
    
        </article>
        <!-- /Panel -->
    
        <!-- Panel -->
        <article class="panel panel-default panel-outline">
    
            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-picture"></i>
            </div>
            <!-- /Icon -->
    
            <!-- Body -->
            <div class="panel-body">
               <img :alt="item.img[1]" :src="item.img[0]">
            </div>
            <!-- /Body -->
    
        </article>
        <!-- /Panel -->
    
        <!-- Panel -->
        <article class="panel panel-primary">
    
            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-plus"></i>
            </div>
            <!-- /Icon -->
    
            <!-- Heading -->
            <div class="panel-heading">
                <h2 class="panel-title" type='type'>{{item.type}}</h2>
            </div>
            <!-- /Heading -->
    
            <!-- Body -->
            <div class="panel-body">
                {{item.description}}
            </div>
            <!-- /Body -->
    
            <!-- Footer -->
            <div class="panel-footer">
                <small><a class="pre-link btn btn-info text-light" :href="item.link">Github</a></small>
            </div>
            <!-- /Footer -->
  
        </article>
 
    
    </div>
   

</div>

</template>

<script>
export default {
        name: 'timeline',
        data: function(){
            return {
                projects:{
                pomodoro:{
                title: 'Promodoro technique GUI',
                subtitle:'Built using tkinter library',
                description: 'A timer that allows you to follow pomodoro technique, with appropriate alert for both short and long break',
                date:'29/04/2021',
                type: 'GUI/Timer',
                img: [require("../assets/img/projects/pomodoro.png"),'POMODORO'],
                link:"https://github.com/saidworks/python_bootcamp/tree/main/100DaysOfCode/day28_Pomodoro"},   
                US_QUIZ:{
                title: 'US STATES QUIZ',
                subtitle:'Built using pandas and turtle packages',
                description: 'A quiz from https://www.sporcle.com/ converted to GUI with an interactive guessing program until user exit it and get a personnalized file containing the US STATES he did not guess.',
                date:'31/03/2021',
                type: 'GUI/GAME',
                img: [require("../assets/img/projects/US_QUIZ.png"),'US STATES QUIZ'],
                link:"https://github.com/saidworks/python_bootcamp/tree/main/100DaysOfCode/day25/us-states-game-end"},SNAKE:{
                title: 'SNAKE',
                subtitle:'Built using turtle package',
                description: '2D game snake similar to nokia\'s famous one, built using turtle package and random module it can record player high score and show it each time.',
                date:'03/4/2021',
                type: '2D/GAME',
                img: [require("../assets/img/projects/snake.gif"),'SNAKE GAME'],
                link:"https://github.com/saidworks/python_bootcamp/tree/main/100DaysOfCode/day20" },
                isPalindrom:{
                title: 'Is Palindrom',
                subtitle:'Built using turtle package',
                description: '  A script written in PHP that tells if the word entered is palindrom',
                date:'07/3/2021',
                type: 'Web app',
                img: [require("../assets/img/projects/ispalindrom.png"),'Restaurant'],
                link:"https://github.com/saidworks/palindrom"},
                 restaurant:{
                title: 'Restaurant dynamic website',
                subtitle:'Built using turtle package',
                description: '   A dynamic website for a restaurant with an admin dashboard for content management and a possibility of users to contact admin.',
                date:'28/3/2021',
                type: 'Website',
                img: [require("../assets/img/projects/restaurant.png"),'Is it Palindrom?'],
                link:"https://github.com/saidworks/sprints/tree/main/Sprint_2/Brief/dynamic" }
                
            }
            }
        }
}
</script>

<style>
.timeline {
    position: relative;
    padding: 21px 0px 10px;
    margin-top: 4px;
    margin-bottom: 30px;
}

.timeline .line {
    position: absolute;
    width: 4px;
    display: block;
    background: currentColor;
    top: 0px;
    bottom: 0px;
    margin-left: 30px;
}

.timeline .separator {
    border-top: 1px solid currentColor;
    padding: 5px;
    padding-left: 40px;
    font-style: italic;
    font-size: .9em;
    margin-left: 30px;
}

.timeline .line::before { top: -4px; }
.timeline .line::after { bottom: -4px; }
.timeline .line::before,
.timeline .line::after {
    content: '';
    position: absolute;
    left: -4px;
    width: 12px;
    height: 12px;
    display: block;
    border-radius: 50%;
    background: currentColor;
}

.timeline .panel {
    position: relative;
    margin: 10px 0px 21px 70px;
    clear: both;
}

.timeline .panel::before {
    position: absolute;
    display: block;
    top: 8px;
    left: -24px;
    content: '';
    width: 0px;
    height: 0px;
    border: inherit;
    border-width: 12px;
    border-top-color: transparent;
    border-bottom-color: transparent;
    border-left-color: transparent;
}

.timeline .panel .panel-heading.icon * { font-size: 20px; vertical-align: middle; line-height: 40px; }
.timeline .panel .panel-heading.icon {
    position: absolute;
    left: -59px;
    display: block;
    width: 40px;
    height: 40px;
    padding: 0px;
    border-radius: 50%;
    text-align: center;
    float: left;
}

.timeline .panel-outline {
    border-color: transparent;
    background: transparent;
    box-shadow: none;
}

.timeline .panel-outline .panel-body {
    padding: 10px 0px;
}

.timeline .panel-outline .panel-heading:not(.icon),
.timeline .panel-outline .panel-footer {
    display: none;
}
img {
    max-width: 50vw;
}
</style>