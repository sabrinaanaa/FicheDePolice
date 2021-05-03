
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    $("#addnew").click(function(e) {
        $("#firstrow").clone() // copy the #firstrow
            .removeAttr("id")  // remove the duplicate ID
            .append('<a class="remover" href="#">Remove</a>') // add a "remove" link
            .insertAfter("#firstrow");  // add to the form
        e.preventDefault();
    });
    $(".remover").live("click",function(e) { 
        // .live() acts on .removers that aren't created yet
        $(this).parent().remove();  // remove the parent div
        e.preventDefault();
    });
});
</script>



</head>
<body>
<div><a href="#" id="addnew">Add New Row</a></div>
<form id="myform">
    <div id="firstrow">
    Name: <input type="text" name="name[]" size="5">
    Year: <input type="text" name="year[]" size="4">
    Description: <input type="text" name="desc[]" size="6">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
</body>