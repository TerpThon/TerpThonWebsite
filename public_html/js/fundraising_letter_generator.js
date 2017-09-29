$(function() {
	$("#generate_button").click(gen_letter);
	$("#dancer_name").focus();
	$("input").keypress(function(e) {
        if(e.which == 13) {
			e.preventDefault();
            gen_letter(e);
			return false;
        }
    });
});

function gen_letter(event) {
	clear_letter_error();
	
	var dancer_name = $.trim($("#dancer_name").val());
	var fundraising_goal = $.trim($("#fundraising_goal").val());
	
	if(dancer_name == "" || fundraising_goal == "") {
		letter_error();
		return false;
	}
	
	dancer_name = dancer_name.replace('<', '').replace('>', '');
	fundraising_goal = fundraising_goal.replace('$', '').replace(',', '');
	fundraising_goal = parseFloat(fundraising_goal);
	
	msg = "<b>Copy the following text into an email:</b><br /><br />\
	At the University of Maryland, you have the chance to try just about anything. Whether it is learning French through a few intensive courses, playing Quidditch with a nationally-ranked team, or simply expanding your palate through diner cuisine, there is no shortage of opportunity at my school. This year, I have the opportunity to <b>make miracles</b> possible for the children and families of Children’s National Health System in Washington D.C. through Terp Thon.<br /><br />\  Terp Thon is a year-long fundraising organization which culminates in in a twelve-hour Miracle Network Dance Marathon each spring. One hundred percent of the proceeds raised throughout the Terp Thon year benefit our local Children’s Miracle Network Hospital. Whether it is through funding research for pediatric illness, purchasing toys to make children feel more comfortable during their hospital stay, or simply ensuring that Children’s National is able to uphold an unparalleled standard of medical care, every dollar raised through and for Terp Thon   <b>For The Kids.</b><br /><br />\  In choosing to stand for twelve hours this spring, I know that I have the ability to create a positive change in the lives of others. In just over six years, Terp Thon at the University of Maryland has raised over 1.8 million dollars worth of miracles, and it is my personal goal to raise $"+fundraising_goal+". As a dancer this year, I would appreciate your support to make even more miracles possible For The Kids! Donations are tax deductible, and any contribution can help. If you would like to support this incredible cause, visit <a href='www.terpthon.org'>terpthon.org</a> and click \"Donate Now!\" Enter my name in the text box, click on my name to go to my fundraising page, and then click on the \"Support Me\" button in the top-right corner of the page. It is not every day that we have an opportunity to positively impact the lives of others, but by joining the Terp Thon movement we can do just that! <br /> \
	For The Kids, <br /> \
	"+dancer_name;
	
	$("#letter_div").html(msg).show();
}

function clear_letter_error() {
	$("#letter_error_div").slideUp().html("");
}

function letter_error() {
	$("#letter_error_div").html("Please fill in both your name and fundraising goal.<br /><br />Fundraising goal should be in the form of a number (e.g. 100 $100 $100.00").slideDown();
}