$(document).ready(function()
{
    $("#aarmsinfo").click(function()
    {
        $("#maindiv").load("ajax/armsinfo.php");
    });
});
$(document).ready(function()
{
    $("#aarmsperson").click(function()
    {
        $("#maindiv").load("ajax/armsperson.php");
    });
});
$(document).ready(function()
{
    $("#astorehouse").click(function()
    {
        $("#maindiv").load("ajax/storehouse.php");
    });
});
$(document).ready(function()
{
    $("#adepartments").click(function()
    {
        $("#maindiv").load("ajax/departments.php");
    });
});
$(document).ready(function()
{
    $("#aarmsusers").click(function()
    {
        $("#maindiv").load("ajax/armsusers.php");
    });
});
$(document).ready(function()
{
    $("#astorein").click(function()
    {
        $("#maindiv").load("ajax/storein.php");
    });
});
$(document).ready(function()
{
    $("#asyslog").click(function()
    {
        $("#maindiv").load("ajax/checklog.php");
    });
});
$(document).ready(function()
{
    $("#atakeout").click(function()
    {
        $("#maindiv").load("ajax/takeout.php");
    });
});
$(document).ready(function()
{
    $("#aarmssurplus").click(function()
    {
        $("#maindiv").load("ajax/armssurplus.php");
    });
});
function checkPwd()
{
    if ($("#inputNewpwd").val() == $("#inputCompwd").val())
    {
        return true;
    }
    else
    {
        alert("两次密码输入不一致!");
        return false;
    }
}              
