let pageNumber = 1;
let limit = 10;
let tableName = "user";

loadAdministratorProfile()
retrieveTable(tableName, 1, 10);


function loadTable(responseObject)
{
    if (responseObject === null || typeof responseObject.head === "undefined") {
        return;
    }

    let table = document.getElementsByTagName("table")[0];
    table.innerHTML = "";

    let tableHeadRow = document.createElement("tr");
    let th = document.createElement("th");
    th.innerText = "";
    tableHeadRow.appendChild(th);
    for (let i = 0; i < responseObject.head.length; ++i) {
        let th = document.createElement("th");
        th.innerText = responseObject.head[i];
        tableHeadRow.appendChild(th);
    }

    table.appendChild(tableHeadRow);

    for (let i = 0; i < responseObject.data.length; ++i) {
        let tableRow = document.createElement("tr");
        let checkboxContainer = document.createElement("div");
        checkboxContainer.setAttribute("class", "checkboxContainer");
        let checkbox = document.createElement("input");
        checkbox.setAttribute("type", "checkbox");
        checkboxContainer.appendChild(checkbox);
        tableRow.appendChild(checkboxContainer);
        for (let j = 0; j < responseObject.data[i].length; ++j) {
            let tableData = document.createElement("td")
            tableData.innerText = responseObject.data[i][j]
            tableRow.appendChild(tableData)
        }
        table.appendChild(tableRow)
    }
}


function toggleExpand(e)
{
    let targetElement = e.nextElementSibling
    let imageElement = e.firstElementChild.nextElementSibling.nextElementSibling
    if (targetElement.getAttribute("data-expand") === "false") {
        targetElement.setAttribute("data-expand", "true")
        imageElement.setAttribute("data-expand", "true")
    } else {
        targetElement.setAttribute("data-expand", "false")
        imageElement.setAttribute("data-expand", "false")
    }
}


function clickTable(clickedTable)
{
    tableName = clickedTable;
    pageNumber = 1;
    retrieveTable(tableName, pageNumber, limit);
}

function goToPreviousPage()
{
    if (pageNumber === 1) {
        return;
    }
    retrieveTable(tableName, --pageNumber, limit);
}

function goToNextPage()
{
    retrieveTable(tableName, ++pageNumber, limit);
}

function goToCertainPage()
{
    pageNumber = document.getElementsByClassName("pageInput")[0].value || 1;
    retrieveTable(tableName, pageNumber, limit);
}

function delAnnon(){
    var id=$('input:radio[name="all_row"]:checked').val();
    window.location.href='../../PHP/delAnnon.php?id=' + id;
}

function delUser(){
    var username=$('input:radio[name="all_row"]:checked').val();
    window.location.href='../../PHP/delUser.php?username=' + username;
}

function delApply(){
    var value=$('input:radio[name="all_row"]:checked').val();
    var str = value.split('|');
    var username=str[0];
    var id=str[1];
    window.location.href='../../PHP/delApply.php?username=' + username + '&id=' + id;
}

function setAdmin(){
    var username=$('input:radio[name="all_row"]:checked').val();
    window.location.href='../../PHP/setAdmin.php?username=' + username;
}
