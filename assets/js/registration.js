/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

    $("#button1id").on('click', function () {
        console.log("Hi");
    });

    $("#Role").change(function () {
        $("#fees").attr("value", $(this).val() === "Student" ? "1500" : $(this).val() === "Professional" ? "2000" : "N/A");
        $("#amt").attr("value", $(this).val() === "Student" ? "1500" : $(this).val() === "Professional" ? "2000" : "N/A");
    });
});

