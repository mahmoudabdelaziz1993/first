$('.post').find('.interaction').find('.boom').on('click',function () {

    //var post = event.target.parentNode.parentNode.childNodes[2].textContent;
    //
    var p = $(this).parent().parent().find('#fetch').find('p').text();

    $('#post_body').val(p);
    console.log('sasdasd');

    $('.#edit-model').modal();

});
