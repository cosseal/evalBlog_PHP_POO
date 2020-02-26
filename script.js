// function display(output)
// {
//     for(var i in output)
//     {
//         var div = document.createElement('div');
//         div.innerHTML+= "<p>"+output[i].content+"</p>";
//         div.innerHTML+="<hr>";
//         document.getElementById('comDisplay').appendChild(div);
//
//     }
// }
//
// function ajaxCall(params)
// {
//     if(params)
//     {
//
//         var url = params.url;
//         var parameters = '?';
//         for(var i in params.parameters)
//         {
//             parameters+=Object.keys(params.parameters[i])[0]+"="+params.parameters[i][Object.keys(params.parameters[i])[0]]+"&";
//         }
//
//         url+=parameters;
//
//         var xhttp = new XMLHttpRequest();
//         console.log(xhttp);
//
//         xhttp.onreadystatechange = function()
//         {
//
//             if(this.readyState == 4 && this.status == 200)
//             {
//
//                 var output = JSON.parse(this.responseText);
//                 console.log(this.responseText);
//
//                 switch(params.parameters[0].controller.action)
//                 {
//                     case"singleArticle" :
//                         display(output);
//                         break;
//                 }
//             }
//         };
//
//         xhttp.open("GET",url,true);
//
//         xhttp.send();
//
//     }
// }
//
// document.getElementById('coms').addEventListener('click', function()
// {
//     ajaxCall(
//         {'url' : 'index.php',
//             'parameters' : [
//                 {'controller' : 'singleArticle'},
//                 {'action' : 'display'}
//             ]
//         }
//     );
// });
//


