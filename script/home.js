/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var xhp = new XMLHttpRequest();
var url = 'data.php';
var method = "GET";
var asynch = true;

xhp.open(method, url, asynch);
//sending ajax request
xhp.send();

//receiving response from data.php
xhp.onreadystatechange = function()
{
    if(this.readyState == 4 && this.status == 200)
    {
        var data = JSON.parse(this.responseText);
        console.log(data);
        
        var html = "";
        for(var a = 0; a < data.length; a++)
        {
            
            var title = data[a].title;
            var time = data[a].time;
            var description = data[a].description;
            
            html += "<tr>";
            html += "<td>" + title + "</td>";
            html += "<td>" + time + "</td>";
            html += "<td>" + description + "</td>";
            html += "</tr>";
        }
        
        document.getElementById('data').innerHTML = html;
    }
}