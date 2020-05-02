/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var ajax = new XMLHttpRequest();
var data = document.getElementById('data');
var error_div = document.getElementById("task");
var task_div = document.getElementById("task_b");
    

//The ajax request function
function request_search(form)
{
    var url = './task.php';
    var title_val = form.taskInput.value;
    
    //call ready state changed and set is value to response
    ajax.onreadystatechange = request_response;
    ajax.open('POST', url, true);
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send('taskInput='+ title_val);
}

function request_response()
{
    if(ajax.readyState == 4)
    {
        if(ajax.status == 200)
        {
            var result = JSON.parse(ajax.responseText);
            if(result[0])
            {
                var row_total = result[1].length;
                
                for(i = 0; i < row_total; i++)
                {
                    var html = "<tr>"
                    + "<td>" + result[1][i].title+"</td>"
                    + "<td>" + result[1][i].time+"</td>"
                    + "<td>" + result[1][i].description+"</td>"
                    + "<td>" + result[1][i].due_date+"</td>";
                    + "</tr>";
                    task_div.innerHTML = "";
                    data.innerHTML = "";
                    content(html, data);
                }
                
            }else
            {
                task_div.innerHTML = "";
                error_content(result[1] ,task_div);
            } 
        }
    }
}

function content(content, parentElement)
{
   parentElement.innerHTML = content;
}

function error_content(co, el)
{
   el.innerHTML = co;
}

request_search();