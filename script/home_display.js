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

function delete_request(title_arg)
{
    var url = './delete.php';
    
    //call ready state changed and set is value to response
    ajax.onreadystatechange = delete_response;
    ajax.open('POST', url, true);
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    alert("Do you trully want to delete: " + title_arg);
    ajax.send('title='+title_arg);
}

function delete_response()
{
    if(ajax.readyState == 4)
    {
        if(ajax.status == 200)
        {
            var result = JSON.parse(ajax.responseText);
            
            alert(result);
            }else
            {
                //task_div.innerHTML = "";
                //error_content(result[1] ,task_div);
        } 
    }
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
                task_div.innerHTML = '';
                for(i = 0; i < row_total; i++)
                {
                    var title = result[1][i].title;
                    var time = "Time " + result[1][i].time;
                    var descr = "Description " + result[1][i].description;
                    var due_date = "Due date " + result[1][i].due_date;
                    error_div.innerHTML;
                    
                    content(title, time, descr, due_date, task_div);
                }
                
            }else
            {
                //task_div.innerHTML = "";
                //error_content(result[1] ,task_div);
            } 
        }
    }
}

function content(title, time, descr, due_date, pE)
{ 
   var divContent = document.createElement('div');
   var button = document.createElement('button');
   button.onclick = function()
   {
       delete_request(title);
   }
   
   divContent.className = "divContent";
   var ptag = document.createElement('p');
   var ptag2 = document.createElement('p');
   var ptag3 = document.createElement('p');
   var ptag4 = document.createElement('p');
   button.innerText = "";
   button.className = "dlt_btn";
   divContent.appendChild(button);
   ptag.append("Title " + title);
   divContent.appendChild(ptag);
   ptag2.append(time);
   divContent.appendChild(ptag2);
   ptag3.append(descr);
   divContent.appendChild(ptag3);
   ptag4.append(due_date);
   divContent.appendChild(ptag4);
   pE.appendChild(divContent);
   
   
}

function error_content(co, el)
{
   el.innerHTML = co;
}

request_search();