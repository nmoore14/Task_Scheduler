$(document).ready(function(){
    $("#completedTasks").hide();
    $("#allTasks").hide();
    $("#newTask").hide();
    $("#completeLink").click(function(){
        $("#currentLink").removeClass("active");
        $("#currentTask").hide();
        $("#completeLink").addClass("active");
        $("#completedTasks").show();
        $("#allLink").removeClass("active");
        $("#allTasks").hide();
        $("#newLink").removeClass("active");
        $("#newTask").hide();
    });
    $("#allLink").click(function(){
        $("#currentLink").removeClass("active");
        $("#currentTask").hide();
        $("#completedTasks").hide();
        $("#completeLink").removeClass("active");
        $("#allLink").addClass("active");
        $("#allTasks").show();
        $("#newLink").removeClass("active");
        $("#newTask").hide();
    });
    $("#currentLink").click(function(){
        $("#currentLink").addClass("active");
        $("#currentTask").show();
        $("#completeLink").removeClass("active");
        $("#completedTasks").hide();
        $("#allLink").removeClass("active");
        $("#allTasks").hide();
        $("#newLink").removeClass("active");
        $("#newTask").hide();
    });
    $("#newLink").click(function(){
        $("#newLink").addClass("active");
        $("#newTask").show();
        $("#currentLink").removeClass("active");
        $("#currentTask").hide();
        $("#completeLink").removeClass("active");
        $("#completedTasks").hide();
        $("#allLink").removeClass("active");
        $("#allTasks").hide();
    })
});
