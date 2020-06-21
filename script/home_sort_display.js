/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var ajax_sort = new XMLHttpRequest();
var error_div = document.getElementById("task");
var task_div = document.getElementById("task_b");
//The ajax request function
function request_sort_search()
{
    var url = './sorteddata.php';
    
    //call ready state changed and set is value to response
    ajax_sort.onreadystatechange = request_sort_response;
    ajax_sort.open('POST', url, true);
    
    ajax_sort.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax_sort.send(null);
}

function request_sort_response()
{
    if(ajax_sort.readyState == 4)
    {
        if(ajax_sort.status == 200)
        {
            var result = JSON.parse(ajax_sort.responseText);
            
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
                    
                    content_sort(title, time, descr, due_date, task_div);
                }
                
               
            }else
            {
                task_div.innerHTML = "";
                error_content(result[1] ,task_div);
            } 
        }
    }
}

function content_sort(title, time, descr, due_date, pE)
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
