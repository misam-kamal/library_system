<script>
var username=document.getElementById("usernamee");
var useremail=document.getElementById("useremaill");
var userpass=document.getElementById("userpasss");
var useraddres=document.getElementById("useraddresss");
// var inputs=document.getElementsByClassName("inputs");

    var tabel1=[];
    display();


function addbtn(){
    create();
    display();
    clear();
    
}
function create(){
    info={
        name:username.value,
        emaill:useremail.value,
        pass:userpass.value,
        add:useraddres.value
    }
    tabel1.push(info);

    </script>   
    <script>
}
function display(){
var result="";
for(var i=0;i<tabel1.length;i++){
    result+=`
    <tr>
    <td>${i}</td>
    <td>${tabel1[i].name}</td>
    <td>${tabel1[i].emaill}</td>
    <td>${tabel1[i].pass}</td>
    <td>${tabel1[i].add}</td>
    <td><button onclick="update(${i})"><i class="fa-solid fa-pen-to-square"></i></button></td>
    </tr>
    `
}
document.getElementById("data").innerHTML=result;
}
function clear(){
    for(var i=0;i<inputs.length;i++){
        inputs[i].value="";
    }

}
function deletee(index){
coursess.splice(index,1);
localStorage.setItem("courselist",JSON.stringify(coursess));
display();
}



</script>

