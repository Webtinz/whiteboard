function deleteProjects(e) {
    (updateid = e), document.getElementById(updateid).remove();
}
var itemid = 11;
function newElement() {
    var e,
        t = document.getElementById("myInput").value;
    "" === t
        ? alert("You must write something task!")
        : ((e = '<div class="sub-group-item">'),
          (e +=
              '<div class="checklist px-0 d-flex form-check align-items-center font-size-15 mb-1"><div class="flex-grow-1"><input type="checkbox" name="subtask" class="form-check-input ms-0" id="' +
              t +
              '">'),
          (e += '<label class="form-check-label mb-0 ms-3" for="' + t + '">'),
          (e += t),
          (e += "</label>"),
          (e +=
              '</div><div><i class="mdi mdi-text mdi-24px text-muted"></i></div></div></div>'),
          document
              .getElementById("sub-tasks")
              .insertAdjacentHTML("beforeend", e)),
        (document.getElementById("myInput").value = "");
}
function addTask() {
    document.getElementById("NewtaskForm").reset(),
        (document.querySelector("#updatetaskdetail").style.display = "none"),
        (document.querySelector("#addtask").style.display = "block"),
        (document.querySelector(".update-task-title").style.display = "none"),
        (document.querySelector(".add-task-title").style.display = "block");
}
function editTask(e) {
    updateid = e;
    var t = document
            .getElementById(updateid)
            .querySelector(".task-status").textContent,
        a = document
            .getElementById(updateid)
            .querySelector(".task-title").textContent;
    document
        .getElementById(updateid)
        .querySelectorAll(".task-assigne a")
        .forEach(function (e) {
            var t = e.getAttribute("value");
            document.getElementById(t).checked = !0;
        }),
        (document.querySelector("#tasksName").value = a),
        (document.querySelector("#TaskStatus").value = t),
        (document.querySelector(".updatetaskdetail").style.display = "block"),
        (document.querySelector(".addtask").style.display = "none"),
        (document.querySelector("#update-task-title").style.display = "block"),
        (document.querySelector("#add-task-title").style.display = "none");
}
function searchTask() {
    for (
        var e,
            t = document.getElementById("search-task").value.toLowerCase(),
            a = document
                .getElementById("all-task")
                .querySelectorAll(".task-list-box"),
            l = 0;
        l < a.length;
        l++
    )
        -1 <
        ((e = a[l].querySelector(".task-title")).textContent || e.innerText)
            .toLowerCase()
            .indexOf(t)
            ? (a[l].style.display = "")
            : (a[l].style.display = "none");
}
document.getElementById("addtask").addEventListener("click", function () {
    var e,
        t = "task-item-" + itemid,
        a = document.querySelector("#tasksName").value,
        l = document.querySelector("#TaskStatus").value,
        s = "",
        d = "",
        s = "Pending" == l ? "danger" : "Progress" == l ? "warning" : "success",
        c = new Array(),
        n = new Array(),
        o = new Array();
    for (
        document
            .querySelectorAll("#taskassignee input[type=checkbox]:checked")
            .forEach(function (e) {
                var t;
                n.push(e.getAttribute("id")),
                    o.push(e.getAttribute("data-type")),
                    (t =
                        "image" == e.getAttribute("data-type")
                            ? e.nextElementSibling.getAttribute("src")
                            : e.nextElementSibling),
                    c.push(t);
            }),
            i = 0;
        i < o.length;
        i++
    ) {
        "image" == o[i]
            ? (d +=
                  '<div class="avatar-group-item"><a href="" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" value=' +
                  n[i] +
                  ' title="" data-bs-original-title="Abel Owen"><img src=' +
                  c[i] +
                  ' alt="" class="rounded-circle avatar-sm"></img></a></div>')
            : ((e = c[i].outerHTML),
              (d +=
                  '<div class="avatar-group-item"><a href="" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" value=' +
                  n[i] +
                  ' title="" data-bs-original-title="Abel Owen">' +
                  e +
                  "</a></div>"));
    }
    (alltasks = document
        .getElementById("sub-tasks")
        .querySelectorAll(".checklist").length),
        (selectedtask = document
            .getElementById("sub-tasks")
            .querySelectorAll("input[name=subtask]:checked").length),
        (newproject =
            '<div id="' +
            t +
            '">        <div class="card list-group-item rounded-3">            <div class="card-body">                <div class="row align-items-center">                    <div class="col-xl-6 col-sm-5">                        <div class="checklist form-check font-size-15">                            <input type="checkbox" class="form-check-input" id="customCheck1">                            <label class="form-check-label ms-1 task-title" for="customCheck1">' +
            a +
            '</label>                        </div>                    </div>                    <div class="col-xl-6 col-sm-7">                        <div class="row align-items-center">                            <div class="col-xl-5 col-md-6 col-sm-5">                                <div class="avatar-group mt-3 mt-xl-0 task-assigne">                                    ' +
            d +
            '                                </div>                            </div>                            <div class="col-xl-7 col-md-6 col-sm-7">                                <div class="d-flex flex-wrap gap-3 mt-3 mt-xl-0 justify-content-md-end">                                    <div>                                        <span class="badge rounded-pill badge-soft-' +
            s +
            ' font-size-11 task-status">' +
            l +
            '</span>                                    </div>                                    <div>                                        <a href="#" class="mb-0 text-muted fw-medium"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>' +
            selectedtask +
            " / " +
            alltasks +
            ' </a>                                    </div>                                    <div>                                        <a href="#" class="mb-0 text-muted fw-medium" data-bs-toggle="modal" data-bs-target=".bs-example-new-task"><i class="mdi mdi-square-edit-outline font-size-16 align-middle" onclick="editTask(`' +
            t +
            '`)"></i></a>                                    </div>                                    <div>                                        <a href="#" class="delete-item" onclick="deleteProjects(`' +
            t +
            '`)">                                            <i class="mdi mdi-trash-can-outline align-middle font-size-16 text-danger"></i>                                        </a>                                    </div>                                </div>                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div>'),
        document
            .querySelectorAll("#landing-task")[0]
            .insertAdjacentHTML("afterbegin", newproject),
        document.getElementById("update-task").click(),
        document.getElementById("NewtaskForm").reset(),
        itemid++;
}),
    document
        .getElementById("updatetaskdetail")
        .addEventListener("click", function () {
            var e,
                t = document.querySelector("#tasksName").value,
                a = document.querySelector("#TaskStatus").value,
                l = new Array(),
                s = new Array(),
                d = new Array(),
                c = "";
            for (
                document
                    .querySelectorAll(
                        "#taskassignee input[type=checkbox]:checked"
                    )
                    .forEach(function (e) {
                        var t;
                        s.push(e.getAttribute("id")),
                            d.push(e.getAttribute("data-type")),
                            (t =
                                "image" == e.getAttribute("data-type")
                                    ? e.nextElementSibling.getAttribute("src")
                                    : e.nextElementSibling),
                            l.push(t);
                    }),
                    i = 0;
                i < d.length;
                i++
            ) {
                c =
                    "image" == d[i]
                        ? c +
                          '<div class="avatar-group-item"><a href="" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" value=' +
                          s[i] +
                          ' title="" data-bs-original-title="Abel Owen"><img src=' +
                          l[i] +
                          ' alt="" class="rounded-circle avatar-sm"></img></a></div>'
                        : ((e = l[i].outerHTML),
                          c +
                              '<div class="avatar-group-item"><a href="" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" value=' +
                              s[i] +
                              ' title="" data-bs-original-title="Abel Owen">' +
                              e +
                              "</a></div>");
            }
            (color =
                "Pending" == a
                    ? "danger"
                    : "Progress" == a
                    ? "warning"
                    : "success"),
                (alltasks = document
                    .getElementById("sub-tasks")
                    .querySelectorAll(".checklist").length),
                (selectedtask = document
                    .getElementById("sub-tasks")
                    .querySelectorAll("input[name=subtask]:checked").length),
                (newproject =
                    '<div class="card list-group-item rounded-3">        <div class="card-body">            <div class="row align-items-center">                <div class="col-xl-6 col-sm-5">                    <div class="checklist form-check font-size-15">                        <input type="checkbox" class="form-check-input" id="customCheck1">                        <label class="form-check-label ms-1 task-title" for="customCheck1">' +
                    t +
                    '</label>                    </div>                </div>                <div class="col-xl-6 col-sm-7">                    <div class="row align-items-center">                        <div class="col-xl-5 col-md-6 col-sm-5">                            <div class="avatar-group mt-3 mt-xl-0 task-assigne">                                ' +
                    c +
                    '                            </div>                        </div>                        <div class="col-xl-7 col-md-6 col-sm-7">                            <div class="d-flex flex-wrap gap-3 mt-3 mt-xl-0 justify-content-md-end">                                <div>                                    <span class="badge rounded-pill badge-soft-' +
                    color +
                    ' font-size-11 task-status">' +
                    a +
                    '</span>                                </div>                                <div>                                    <a href="#" class="mb-0 text-muted fw-medium"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>' +
                    selectedtask +
                    " / " +
                    alltasks +
                    '</a>                                </div>                                <div>                                    <a href="#" class="mb-0 text-muted fw-medium" data-bs-toggle="modal" data-bs-target=".bs-example-new-task"><i class="mdi mdi-square-edit-outline font-size-16 align-middle" onclick="editTask(`' +
                    updateid +
                    '`)"></i></a>                                </div>                                <div>                                    <a href="#" class="delete-item" onclick="deleteProjects(`' +
                    updateid +
                    '`)">                                        <i class="mdi mdi-trash-can-outline align-middle font-size-16 text-danger"></i>                                    </a>                                </div>                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div>'),
                (document.getElementById(updateid).innerHTML = newproject),
                document.getElementById("update-task").click(),
                document.getElementById("NewtaskForm").reset();
        });
