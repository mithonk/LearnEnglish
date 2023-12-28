$(document).ready(function () {
  //On click singnup, hide login and show registration form
  $('#signup').click(function () {
    console.log(4)
    $('.first').slideUp('slow', function () {
      $('.second').slideDown('slow')
    })
  })

  //On click singin, hide registeration and show login form
  $('#signin').click(function () {
    $('.second').slideUp('slow', function () {
      $('.first').slideDown('slow')
    })
  })
})
