/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var sort_btn = document.getElementById('sort');
var ajax = new XMLHttpRequest();
var form_div = document.getElementById("form");
var data = document.getElementById('data');
var error_div = document.getElementById("task");
var task_div = document.getElementById("task_b");
var tf = document.getElementById('task_title');
var due_time = document.getElementById('due_time');
var dueDate = document.getElementById('due_date');
var description = document.getElementById('descr');
var task_btn = document.getElementById('task_btn');

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
            }else
            {
                task_div.innerHTML = "";
                error_content(result[1] ,task_div);
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
                    var time = result[1][i].time;
                    var descr = result[1][i].description;
                    var due_date = result[1][i].due_date;
                    error_div.innerHTML;
                    
                    content(title, time, descr, due_date, task_div);
                }

                if(task_div.innerHTML !== '')
                {
                    sort_btn.style.display = 'block';
                }
            }else
            {
                task_div.innerHTML = "";
                error_content(result[1] ,task_div);
            } 
        }
    }
}

function content(title, time, descr, due_date, pE)
{ 
   var divContent = document.createElement('div');
   var button = document.createElement('button');
   
   var edit_btn = document.createElement('button');
   
   edit_btn.onclick = function()
   {
       tf.value = title;
       due_time.value = time;
       description.value = descr;
       dueDate.value = due_date;
       
       task_btn.value = 'Update';
       pE.style.display = "none";
       error_div.style.display = "none";
       form_div.style.display = "block";
   }
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
   edit_btn.className = "edit_btn";
   edit_btn.innerText = "";
   
   divContent.appendChild(edit_btn);
   divContent.appendChild(button);
   ptag.append("Title: " + title);
   divContent.appendChild(ptag);
   ptag2.append("Time: " + time);
   divContent.appendChild(ptag2);
   ptag3.append("Description: " + descr);
   divContent.appendChild(ptag3);
   ptag4.append("Due Date: " + due_date);
   divContent.appendChild(ptag4);
   pE.appendChild(divContent);
   
   
}

function error_content(co, el)
{
   el.innerHTML = co;
}

setInterval(function(){request_search();}, 1000);
