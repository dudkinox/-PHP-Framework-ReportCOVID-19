var info = 1;

function show_data() {
  document.getElementById("hide").style = "display: block";
}

function close_data() {
  document.getElementById("hide").style = "display: none";
}

function show_dataadd() {
  document.getElementById("hide_home").style = "display: block";
}

function close_dataadd() {
  document.getElementById("hide_home").style = "display: none";
}

function myFunction3() {
  var checkBox = document.getElementById("myCheck3");
  var text = document.getElementById("Yes3");
  if (checkBox.checked == true) {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("Yes");
  if (checkBox.checked == true) {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

function myFunction1() {
  var checkBox = document.getElementById("myCheck1");
  var text = document.getElementById("Yes1");
  if (checkBox.checked == true) {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

function myFunction2() {
  var checkBox = document.getElementById("myCheck2");
  var text = document.getElementById("Yes2");
  if (checkBox.checked == true) {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}

// เพิ่มตาราง

$(document).ready(function () {
  $("#add_row").on("click", function () {
    // Dynamic Rows Code

    // Get max row id and set new id
    var newid = 0;
    $.each($("#tab_logic tr"), function () {
      if (parseInt($(this).data("id")) > newid) {
        newid = parseInt($(this).data("id"));
      }
    });
    newid++;

    var tr = $("<tr></tr>", {
      id: "addr" + newid,
      "data-id": newid,
    });

    // loop through each td and create new elements with name of newid
    $.each($("#tab_logic tbody tr:nth(0) td"), function () {
      var td;
      var cur_td = $(this);

      var children = cur_td.children();

      // add new td and element if it has a nane
      if ($(this).data("name") !== undefined) {
        td = $("<td></td>", {
          "data-name": $(cur_td).data("name"),
        });

        var c = $(cur_td).find($(children[0]).prop("tagName")).clone().val("");
        c.attr("name", $(cur_td).data("name") + newid);
        c.appendTo($(td));
        td.appendTo($(tr));
      } else {
        td = $("<td></td>", {
          text: $("#tab_logic tr").length,
        }).appendTo($(tr));
      }
    });

    // add delete button and td
    /*
        $("<td></td>").append(
            $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
                .click(function() {
                    $(this).closest("tr").remove();
                })
        ).appendTo($(tr));
        */

    // add the new row
    $(tr).appendTo($("#tab_logic"));

    $(tr)
      .find("td button.row-remove")
      .on("click", function () {
        $(this).closest("tr").remove();
      });
  });

  // Sortable Code
  var fixHelperModified = function (e, tr) {
    var $originals = tr.children();
    var $helper = tr.clone();

    $helper.children().each(function (index) {
      $(this).width($originals.eq(index).width());
    });

    return $helper;
  };

  $(".table-sortable tbody")
    .sortable({
      helper: fixHelperModified,
    })
    .disableSelection();

  $(".table-sortable thead").disableSelection();

  $("#add_row").trigger("click");
});

// หน้า History

function showquestion1_data() {
  document.getElementById("question1").style = "display: block";
}
function closequestion1_data() {
  document.getElementById("question1").style = "display: none";
}
function showquestion2_data() {
  document.getElementById("question2").style = "display: block";
}
function closequestion2_data() {
  document.getElementById("question2").style = "display: none";
}
function showquestion3_data() {
  document.getElementById("question3").style = "display: block";
}
function closequestion3_data() {
  document.getElementById("question3").style = "display: none";
}
function showquestion4_data() {
  document.getElementById("question4").style = "display: block";
}
function closequestion4_data() {
  document.getElementById("question4").style = "display: none";
}

// หน้า search
function enforce_maxlength(event) {
  var t = event.target;
  if (t.hasAttribute("maxlength")) {
    t.value = t.value.slice(0, t.getAttribute("maxlength"));
  }
}

// ปุ่มเพิ่มข้อมูล

function add_fields() {
  var objTo = document.getElementsByClassName("tab_logic")[0];
  console.log(objTo);
  var more = document.createElement("div");
  info++;
  more.innerHTML =
    '<h6 class="heading-small text-muted mb-4">ข้อมูลเพิ่มเติม ชุดที่ ' +
    info +
    '</h6><div class="row"><div class="col-lg-6"><div class="form-group"><label class="form-control-label" for="input-username">ชื่อ-สกุล</label><input type="text" id="input-username" class="form-control" placeholder="ชื่อ-สกุล" ></div></div><div class="col-lg-3"><div class="form-group"><label class="form-control-label" for="input-old">อายุ</label><input type="number" id="input-old" class="form-control" min="1" max="99"  maxlength="2" placeholder="อายุ"></div></div></div><div class="row"><div class="col-lg-12"><div class="form-group"><h5>เพศ</h5><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="men"><label class="form-check-label" for="men">ชาย</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="women"><label class="form-check-label" for="women">หญิง</label></div></div></div><div class="col-lg-12"><div class="form-group"><label class="form-control-label" for="input-first-name">ที่อยู่/เบอร์โทรศัพท์</label><input type="text" id="input-first-name" class="form-control" placeholder="ที่อยู่/เบอร์โทรศัพท์"></div></div><div class="col-lg-6"><div class="form-group"><label for="datemax">วันที่สัมผัส : </label><br><input type="date" id="datemax" name="datemax" max="2021-12-31"></div></div><div class="col-lg-12"><div class="form-group"><label class="form-control-label" for="input-first-name">ลักษณะการสัมผัส</label><input type="text" id="input-first-name" class="form-control" placeholder="ลักษณะการสัมผัส"></div></div><div class="col-lg-12"><div class="form-group"><label class="form-control-label" for="input-first-name">ป่วย/ไม่ป่วย (กรณีป่วยระบุวันเริ่มป่วยและอาการ)</label><input type="text" id="input-first-name" class="form-control" placeholder="ที่อยู่/เบอร์โทรศัพท์"></div></div><div class="col-lg-12"><div class="form-group"><label class="form-control-label" for="input-first-name">การใส่อุปกรณ์ป้องกัน</label><input type="text" id="input-first-name" class="form-control" placeholder="การใส่อุปกรณ์ป้องกัน"></div></div><div class="col-lg-6"><div class="form-group"><label for="datemax">วันที่ได้รับวัคซีนป้องกันโรค COVID-19 ครบตามเกณฑ์ : </label><input type="date" id="datemax" name="datemax" max="2021-12-31"></div></div></div><hr class="my-4" />';
  objTo.appendChild(more);
}
