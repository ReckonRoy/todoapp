/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var ajax = new XMLHttpRequest();
var msg = document.getElementById('msg');

    

//The ajax request function
function request(form)
{
    var url = './data.php';
    var title_val = form.task_title.value;
    var time_val = form.due_time.value;
    var date_val = form.due_date.value;
    var descr_val = form.task_descr.value;
    
    
    //call ready state changed and set is value to response
    ajax.onreadystatechange = response;
    ajax.open('POST', url, true);
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send('task_title='+ title_val + '&time_vale=' + time_val + '&date_val=' + date_val + '&descr_val=' + descr_val);
}

function response()
{
    if(ajax.readyState == 4)
    {
        if(ajax.status == 200)
        {
            var result = JSON.parse(ajax.responseText);
            if(result[0])
            {
                
                var h2 = result[1];
                var h3= result[2];
            }
            //empty inner html property here
            msg.innerHTML = "";
            make_content(h2, h3 ,msg);
        }
    }
}

function make_content(h2, h3, parentElement)
{
    var ptag = document.createElement('p');
    
    var h2tag = document.createElement('h2');
    h2tag.append(h2);
    
    var h3tag = document.createElement('h3');
    h3tag.append(h3);
    
    ptag.appendChild(h2tag);
    ptag.appendChild(h3tag);
    parentElement.appendChild(ptag);
}