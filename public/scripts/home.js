$(document).ready(function(){

  var lmsRestToken = $('meta[name="lms-rest-token"]').attr('content');
  
  var courseList = $('#plp-home-courses'),
      courseListContainer = courseList.find('.row'),
      linkToLMS = courseList.data('fetch-from');

  loadCoursesData();

  $('#plp-home').on('click', '.courses-reload', function(e){
    e.preventDefault();
    loadCoursesData();
  })

  // Crawl courses data from link_to_courses
  function loadCoursesData() {

    courseListContainer.find('.loading').html('Loading...');

    $.get(linkToLMS + 'webservice/rest/server.php', {
      wstoken: lmsRestToken,
      wsfunction: 'core_course_get_categories',
      moodlewsrestformat: 'json'
    }).done(function(data){

      // Check whether fetching is error
      if (data.exception) {
        var exceptionHTML = '<span class="text-danger">Terdapat kesalahan. <a class="courses-reload" href="#">Ulangi pemanggilan data</a>.</span>';
        courseListContainer.find('.loading').html(exceptionHTML);
        return;
      }

      // Filter data to first depth category only
      var actualData = [];
      for (var subdata of data) {
        if (subdata.depth == 1 && subdata.visible == 1) {
          actualData.push(subdata);
        }
      }

      for (var category of actualData) {
        var categoryHTML = '<div class="col-xs-12 col-sm-6 col-md-3">';
        categoryHTML += ' <a href="'+ linkToLMS +'course/index.php?categoryid='+ category.id +'" class="panel panel-default course-item" target="_blank">';
        categoryHTML += '   <div class="panel-body">';
        categoryHTML += '     <h4>'+ category.name +'</h4>';
        categoryHTML += '     <span class="item-logo glyphicon glyphicon-education"></span>';
        categoryHTML += '   </div>';
        categoryHTML += ' </a>';
        categoryHTML += '</div>';
        courseListContainer.append(categoryHTML);
      }
    
      courseListContainer.find('.loading').remove();

    });
  }

});