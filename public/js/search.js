$(document).ready(function () {

  $("#name").click(function(){
    var nameMarathon = $("#name").val();
    $.post('http://localhost:8081/api/searchMarathons',
          {nameMarathon: nameMarathon},
          function(match){
            $("#marathonName").html(match);
          }
        );
  });

});
