var user = (function () {
    'use strict';
    var timeout;
    return {
        showUsers: function () {
            var username =  $('#username').val();
            if(username === '')
            {
                alert('Input is required');
                return;
            }
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
            $(".alert-danger").remove();
            $.ajax({
                type: "GET",
                url:  "/username",
                data: { username:username},
                success:function(data){
                    var items = data.items;
                    var userList = $('#list_user');
                    userList.empty();
                    if (!items) {
                        alert(data);
                    }
                    var i,text;
                    for (i = 0; i < items.length; i++) {
                        text = '<tr>';
                        text += '<td>';
                        text += items[i]['id'];
                        text += '</td>';
                        text += '<td class="nr">';
                        text += items[i]['login'];
                        text += '</td>';
                        text += '<td>';
                        text += items[i]['type'];
                        text += '</td>';
                        text += '<td>';
                        text += '<button id="user">';
                        text += 'Followers';
                        text += '</button>';
                        text += '</td>';
                        text += '</tr>';

                        userList.append(text);
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
        showFollowers: function () {
            var item = $($(this).closest("tr").children('td')[1]).text();
            window.location.replace("/followers/"+item);
        },
        loadHandlers:function () {
            $('body').delegate('#search', 'click', user.showUsers);
            $('body').delegate('#user', 'click', user.showFollowers);
        },
    };
    
}());


document.addEventListener('DOMContentLoaded', function(e) {
    user.loadHandlers();
});