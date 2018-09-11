var followers = (function () {
    'use strict';

    var page =  0;
    var count =  1;
    var timeout;

    return {
        showFollowers: function () {
            page++;
            var username = $('#user-follow').text();
            $.blockUI({
                message: 'Loading data',
                css: {
                    padding: '20px',
                    margin: 0,
                    width: '50%',
                    top: '40%',
                    left: '25%',
                    textAlign: 'center',
                    color: '#36459b',
                    border: 'none',
                    backgroundColor: '#fff',
                    cursor: 'wait',
                    fontSize: '2.1em'
                }
            });

            $.ajax({
                type: "GET",
                url:  "/showMoreFollowers",
                data: { page:page,username:username},
                success:function(data){
                    var followers = JSON.parse(data);
                    var items = followers['followers'];
                    var i,text;
                    for (i = 0; i < items.length; i++) {
                        text = '<tr>';
                        text += '<td>';
                        text += count;
                        text += '</td>';
                        text += '<td>';
                        text += items[i]['id'];
                        text += '</td>';
                        text += '<td>';
                        text += items[i]['login'];
                        text += '</td>';
                        text += '<td>';
                        text += items[i]['type'];
                        text += '</td>';
                        text += '</tr>';

                        $('#list_followers').append(text);
                        count++;
                    }
                    if(followers['isShowButtonNeeded'] ==  false)
                    {
                        $('#show_more').remove();
                    }
                },
                error: function(data) {
                    alert(data);
                },
                complete: function(data) {
                    $.unblockUI();
                }
            });
        },

        loadHandlers:function () {
            $('body').delegate('#show_more', 'click', followers.showFollowers);
        }
    };

}());


document.addEventListener('DOMContentLoaded', function(e) {
    followers.showFollowers();
    followers.loadHandlers();
});

