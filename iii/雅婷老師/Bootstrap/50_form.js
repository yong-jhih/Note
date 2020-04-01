function fun1() {
    // 練習將畫面上的 input 相關 value 資料讀出
    console.log(1);

    // javascript版本
    var userName = document.getElementById('userName').value;
    var userPhone = document.getElementById('phone').value;

    var userAge = document.querySelector('input[name="age"]:checked').value;
    var userJob = document.querySelector('input[name="job"]:checked').value;

    var items = document.getElementsByName('vehicle'); // 四個選項
    var selected = []; // 放入user選取的項目
    for (var i = 0; i < items.length; i++) {
        if (items[i].checked){
            selected.push(items[i].value);
        }
    }

    
    alert(userName);
    alert(userPhone);
    alert(userAge);
    alert(userJob);
    alert(selected.join(' '));

    // jQuery的寫法
    var userName = $("#userName").prop("value");
    var userPhone = $("#phone").prop("value");
    var userAge = $("input[Name='age']:checked").prop("value");
    var userJob = $("input[Name='job']:checked").prop("value");
    var selected = [];
    $("input[name='vehicle']:checked").each(function(){
        selected.push($(this).prop("value"));
    })

}