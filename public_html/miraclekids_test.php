<?php
$PAGE_SETTINGS["active"] = 'sponsors';
/*$PAGE_SETTINGS["js"] = array( "/js/miraclekids_test.js");*/
include("includes/header.inc.php");
?>
<style>

.column-override{
	display: table;
	table-layout: fixed;
	width: 100%;
	text-align: center;
}

.centered {
	float: none;
	display: table-cell;
	text-align: center;
	vertical-align: middle;
}

img.logo_centered {
	display: block;
	margin-left: auto;
	margin-right: auto;
	max-height: 225px;
}

.italicized {
	font-style: italic;
}

p.large {
	font-size:20px;
}

.img-thumbnail {
	height: 270px;
	width: 270px;
}

/* Modal dialog styles */
.modal-content {
	text-align: center;
}

.modal-backdrop.fade.in {
	z-index: 10;
}

#modalPopup {
	z-index: 10000;
}

</style>
<script>

	/*
	id: A unique id used as the .jpg name and to identify which data should be used to populate the modal
	name: The name to display in the "Meet <name>" part of the dialog
	about: Array of child facts with the last item always being the child's diagnosis
	*/
	var mk = [
				{
					"id":"Alexander", 
					"name":"Alexander", 
					"about":["12 years old", "Cub Scout", "Pokemon and karate buff", "Hypotonic Cerebral Palsy"],
					"paragraph": "Alexander was diagnosed with hypotonic cerebral palsy at age 3 and has since spent countless days at Children’s National working on his mobility with the occupational and physical therapy team. Alexander keeps plenty busy with swimming, singing in his church choir, taking karate lessons, and being a Cub Scout. Alexander is known to be one of the toughest judges for Terp Thon’s annual a cappella competition, in which his brutally honest critiques are often the most entertaining of the night. In 2011, Alexander and his twin sister Tess were named DC’s Children’s Miracle Network Champions. “Our kids can’t always do what their peers can do. But being a part of the Children’s Miracle Network gives them the opportunity to do what their peers can’t,” said their mother."
				},
				{
					"id":"Tess", 
					"name":"Tess", 
					"about":["13 years old", "Girl Scout Brownie", "A capella fan", "Hemiplegic Cerebral Palsy"],
					"paragraph": "Ever since Tess was diagnosed with hemiplegic cerebral palsy at age 2, she has undergone treatments to increase her mobility, as well as ongoing physical and occupational therapy at Children’s National. Today, she is proud to be on the honor roll and is involved in a variety of activities – swimming, taking karate lessons, singing in her church choir, and participating in Girl Scouts as a Brownie. Tess says that her proudest moment was when she was able to answer high school level questions at a U.S. Naval Academy interview. Tess and her twin brother Alexander were named DC’s 2011 Children’s Miracle Network Champions. Tess is a self proclaimed a cappella enthusiast and looks forward to attending Terp Thon’s annual a cappella show every spring!	"
				},
				{
					"id":"Amanda", 
					"name":"Amanda", 
					"about":["7 years old", "2014 Children’s Miracle Network Champion", "Wishes to 'fly and eat all candy'", "Acute Myeloid Leukemia"],
					"paragraph": 'Nothing can stop Amanda - not a bone cancer diagnosis, not fourteen rounds of chemotherapy, and certainly not a prosthetic leg. Just after her second birthday, Amanda was diagnosed with Ewing’s Sarcoma and immediately underwent treatment at Children’s National. At only two-and-a-half years old, she had her left leg amputated and replaced with a prosthesis, which she now affectionately refers to as her “J-leg.” Amanda is able to run and play like any other 8th grader – in fact, her friends have a hard time keeping up with her. Amanda is one of the fastest girls on her soccer team and is proud to say that she has scored a goal with her J-leg! She is a fan favorite at Terp Thon and rallies the crowd with her rendition of “Stronger” by Kelly Clarkson, while dancing around on her J-leg. Says Amanda, “I had cancer. Now, thanks to Children’s National, I have a really cool robot leg that helps me walk. Everyone in my class wishes they had a robot leg, too!”	'
				},
				{
					"id":"Brooke", 
					"name":"Brooke", 
					"about":["12 years old", "Helped raise $2,290.52 FTK at her school", "Soccer powerhouse", "Ewing’s Sarcoma"],
					"paragraph": "At just 2 years old, Brooke went from playing on the playground to being diagnosed with acute myeloid Leukemia in the blink of an eye. Brooke immediately started chemotherapy but doctors said a bone marrow transplant was necessary to save her life. Luckily, Brooke’s sister Caitlin was a perfect match willingly stepped up to save her sister’s life. Brooke is now six and there are no signs of the cancer recurring! Her rendition of “Let It Go” from Frozen and “Roar” by Katy Perry at past Terp Thons has defined her as annual show-stealer. Brooke dreams of someday being able to “fly and eat all candy,” but in the mean time, spends her days riding bikes and playing Polly Pockets with her sister. Brooke and Caitlin have a bond like no other sisters and are the best of friends."
				},
				{
					"id":"Caitlin", 
					"name":"Caitlin", 
					"about":["10 years old", "2014 Children’s Miracle Network Champion", "Ambitious gymnast", "Bone Marrow Transplant"],
					"paragraph": "Sisters share a lot of things: toys, clothes, and for some, even bone marrow. Caitlin was just five years old when her younger sister, Brooke, was diagnosed with leukemia. A bone marrow transplant was Brooke’s best chance for survival, and Caitlin happened to be a perfect match. Without fear, Caitlin volunteered herself to save her sister’s life. Now, five years later, the two are both healthy with a bond stronger than most. The transplant did not slow Caitlin down at all; she has participated in races and kid’s dashes that benefit causes such as Children’s National and cancer research. She is an ambitious gymnast who stole the show with a floor routine at this past Terp Thon and was named DC’s 2014 Children’s Miracle Network Champion, along with Brooke!"
				},
				{
					"id":"Caleb", 
					"name":"Caleb", 
					"about":["1 year old", "Hypoplastic Left Heart Syndrome"],
					"paragraph": "Caleb was prenatally diagnosed with hypoplastic left heart syndrome and was immediately rushed to Children’s National upon birth. Caleb had open heart surgery when he was less than a week old and had to stay at the hospital for four months due to complications and other procedures. In spite of all of this, he is now a thriving toddler who loves playing with his twin brother Jonah! "
				},
				{
					"id":"Carsten", 
					"name":"Carsten", 
					"about":["15 years old", "Designed a board game to teach kids about cancer", "Featured on Cheez-It boxes", "Acute Lymphoblastic Leukemia"],
					"paragraph": "When Carsten first thought about what he wanted from the Make-A-Wish Foundation, he knew that he wanted it to benefit other kids. He ended up designing a board game to teach kids about cancer - a subject he knew very well because he had been diagnosed with acute lymphoblastic leukemia only two years prior. Carsten underwent chemotherapy at Children’s National and went into remission when he was 12! In 2012, he spoke at a pre-race event for the Cherry Blossom Run and went on to run the 5k. He was also featured on special edition boxes of Kellogg’s Cheez-It crackers as part of a campaign to benefit Children’s Miracle Network."
				},
				{
					"id":"Chase", 
					"name":"Chase", 
					"about":["9 years old", "Damaged Esophagus and Epiglottis"],
					"paragraph": "Chase was 3 years old when he accidentally dipped his toothbrush into a lye-based drain cleaner, ingesting some of it. He was unable to swallow or breathe due to the damage on his epiglottis and esophagus. He spent three weeks at Children’s National PICU until he was stable enough to undergo surgery. The scarring in his throat narrowed his airway and required him to get a tracheotomy. Luckily for Chase, his vocal chords and voice box were not damaged and the tracheotomy should be removed by adulthood. Chase is now nine years old and a happy and healthy child. He enjoys coming to Terp Thon’s annual Halloween parties, dressing up, and scaring people!"
				},
				{
					"id":"Colton", 
					"name":"Colton", 
					"about":["12 years old", "Favorite anesthesia flavor is chocolate", "Dopa-Responsive Dystonia"],
					"paragraph": "As a toddler, Colton had trouble walking and was experiencing muscle spasms, cramped feet, and unusual gait. After frequent visits to the emergency department, Colton was diagnosed with Dopa-reponsive dystonia. The doctors at Children’s National prescribed him L-dopa, which helped him walk more smoothly. Says his mother, 'He’s just a rare person. He always has a smile on his face. He’s always happy, always telling a joke. He’s very unaffected by it.' Today, Colton enjoys biking and swimming with his little brother Connor!	"
				},
				{
					"id":"Courtney", 
					"name":"Courtney", 
					"about":["Likes gymnastics, swimming, playing piano", "Neurally Mediated Hypotension"],
					"paragraph": "When Courtney was 18 months old, she suffered what appeared to be a seizure. Each year since, she had experienced episodes of fainting and blackouts. Multiple EEGs, CT scans, and MRIs were inconclusive until she met with a cardiologist at Children’s National. Courtney was diagnosed with neurally mediated hypotension, which is low blood pressure from faulty brain signals that leads to nausea, dizziness, and fainting. Courtney continues to go to Children’s National for checkups and treatment. Today, she enjoys gymnastics, playing piano, and swimming. Courtney says that being part of Children’s Miracle Network makes her feel special! "
				},
				{
					"id":"Daisy", 
					"name":"Daisy", 
					"about":["13 years old","Oncology floor resident cheerleader","Leukemia"]],
					"paragraph": "When Courtney was 18 months old, she suffered what appeared to be a seizure. Each year since, she had experienced episodes of fainting and blackouts. Multiple EEGs, CT scans, and MRIs were inconclusive until she met with a cardiologist at Children’s National. Courtney was diagnosed with neurally mediated hypotension, which is low blood pressure from faulty brain signals that leads to nausea, dizziness, and fainting. Courtney continues to go to Children’s National for checkups and treatment. Today, she enjoys gymnastics, playing piano, and swimming. Courtney says that being part of Children’s Miracle Network makes her feel special! "
				},
				{
					"id":"Ian", 
					"name":"Ian", 
					"about":["12 years old", "Baseball ace", "Hypoplastic Right Heart Syndrome"],
					"paragraph": "When Ian was a baby, he was diagnosed with hypoplastic right heart syndrome and required open heart surgery at just three days. Fortunately, the doctors and nurses at Children’s National were able to repair his heart over a series of five open heart surgeries. Ian is now a happy, healthy boy who loves to play baseball! "
				},
				{
					"id":"IanD", 
					"name":"Ian", 
					"about":["10 years old", "Views his doctors as his heroes", "Inspired a Mini Dance Marathon at his school", "Severe Coarctation of the Aorta"],
					"paragraph": "Everyone has a hero, whether it be their own mothers or Marvel superheroes. To Ian, his doctors are his heroes. After experiencing breathing problems when he was five-and-a-half months old, Ian went into Children’s National for testing. He found out that his RSV tests were positive and his heart was enlarged. As a result of this severe coarctation of the aorta, Ian required heart surgery. Luckily, the removal of the narrowed section of his aorta was successful and to date, Ian loves seeing the doctors at Children’s National! He views them as his heroes because he is now able to play sports. Ian also inspired a Mini Dance Marathon at Resnik Elementary School, raising $1,150 FTK during their second year!"
				},
				{
					"id":"Jack", 
					"name":"Jack", 
					"about":["17 years old","Skilled golfer","Advocated in front of Congress","Germinoma"],
					"paragraph": "When Courtney was 18 months old, she suffered what appeared to be a seizure. Each year since, she had experienced episodes of fainting and blackouts. Multiple EEGs, CT scans, and MRIs were inconclusive until she met with a cardiologist at Children’s National. Courtney was diagnosed with neurally mediated hypotension, which is low blood pressure from faulty brain signals that leads to nausea, dizziness, and fainting. Courtney continues to go to Children’s National for checkups and treatment. Today, she enjoys gymnastics, playing piano, and swimming. Courtney says that being part of Children’s Miracle Network makes her feel special! "
				},
				{
					"id":"Jaiwen", 
					"name":"Jaiwen", 
					"about":["16 years old","Junior Class President","Helped raise <a href='https://www.facebook.com/WalkAwayCancerWhitman'> $24,514.69 FTK at his school</a>","Osteosarcoma"],
					"paragraph": "When Courtney was 18 months old, she suffered what appeared to be a seizure. Each year since, she had experienced episodes of fainting and blackouts. Multiple EEGs, CT scans, and MRIs were inconclusive until she met with a cardiologist at Children’s National. Courtney was diagnosed with neurally mediated hypotension, which is low blood pressure from faulty brain signals that leads to nausea, dizziness, and fainting. Courtney continues to go to Children’s National for checkups and treatment. Today, she enjoys gymnastics, playing piano, and swimming. Courtney says that being part of Children’s Miracle Network makes her feel special! "
				},
				{
					"id":"Jessica", 
					"name":"Jessica", 
					"about":["16 years old","Holds a green belt in Kung Fu","Aspires to be a doctor","Spina Bifida"],
					"paragraph": "When Courtney was 18 months old, she suffered what appeared to be a seizure. Each year since, she had experienced episodes of fainting and blackouts. Multiple EEGs, CT scans, and MRIs were inconclusive until she met with a cardiologist at Children’s National. Courtney was diagnosed with neurally mediated hypotension, which is low blood pressure from faulty brain signals that leads to nausea, dizziness, and fainting. Courtney continues to go to Children’s National for checkups and treatment. Today, she enjoys gymnastics, playing piano, and swimming. Courtney says that being part of Children’s Miracle Network makes her feel special! "
				},
				{
					"id":"Joey", 
					"name":"Joey", 
					"about":["17 years old","Viral Tebowing sensation","Maryland Athletics enthusiast","Acute Lymphoblastic Leukemia"],
					"paragraph":""
				},

					"id":"Jordan", 
					"name":"Jordan", 
					"about":["17 years old","Played football and wrestled in high school","Attending Morehouse College","Double Craniotomy for Sinus Infection"],
					"paragraph":""
				},
				{
					"id":"Zane", 
					"name":"Zane", 
					"about":["12 years old","Honored Hero of the 2012 Redskins’ Leukemia Golf Classic","Named his fish Megatron and Super Mario","Leukemia"],
					"paragraph":""
				},

				{
					"id":"Jozlyn", 
					"name":"Jozlyn", 
					"about":["15 years old","Cheerleader","Loves creating nail designs","Sickle-Cell Disease"],
					"paragraph":""
				},

				{
					"id":"Kierslyn", 
					"name":"Kierslyn", 
					"about":["13 years old","Wants to pursue a computer science at UMD","Loves Minecraft","Ehlers-Danlos Syndrome"],
					"paragraph":""
				},

				{
					"id":"Luca", 
					"name":"Luca", 
					"about":["5 years old","Urea Cycle Disorder"],
					"paragraph":""
				},

				{
					"id":"Micah", 
					"name":"Micah", 
					"about":["5 years old","Can sign in American Sign Language","Atrial Septal Defect, Ebstein’s Malformation, Pulmonary Atresia"]
					"paragraph":""
				},

				{
					"id":"Noble", 
					"name":"Noble", 
					"about":["11 years old","2015 Children’s Miracle Network Champion","Proud owner of a Redskins logo emblazoned-prosthetic","Leg Amputation from Lawn Mower Accident"]
					"paragraph":""
				},

				{
					"id":"Olivia", 
					"name":"Olivia", 
					"about":["11 years old","Nicknamed “Princess of Cardiac Intensive Care Unit”","Wants to be a cardiologist for kids","Cardiomyopathy"],
					"paragraph":""
				},

				{
					"id":"Ryan", 
					"name":"Ryan", 
					"about":["10 years old","Member of the “President’s Committee on People with Intellectual Disabilities”","Superhero fanatic","Dandy-Walker Malformation"],
					"paragraph":""
				},

				{
					"id":"Samerya", 
					"name":"Samerya", 
					"about":["4 years old","Future nurse","Beyoncé fan","FSGS/Nephrotic Syndrome"],
					"paragraph":""
				},

				{
					"id":"Tara", 
					"name":"Tara", 
					"about":["10 years old","Softball all-star","Dreams of being a police dog trainer","Astrocytoma"],
					"paragraph":""
				},

				{
					"id":"Trevor", 
					"name":"Trevor", 
					"about":["4 years old","Ependymoma"],
					"paragraph":""
				},

				{
					"id":"Zach", 
					"name":"Zach", 
					"about":["17 years old","Runs track for high school ROTC","Cardiac arrest"],
					"paragraph":""
				},

				{
					"id":"Zoie", 
					"name":"Zoie", 
					"about":["9 years old","Enjoys gymnastics, swimming, ballet, and tap","Wilms Tumor"],
					"paragraph":""
				},


			];

	jQuery(document).ready(function(){
		var $m = jQuery("#modalPopup");
		var  $container = jQuery(".mk-container");
		var $row = null;

		for(var i = 0; i < mk.length; i++) {
			if ($row !=  null && i%4 == 0) {
				$container.append($row);
				$row = null;
			}
			if ($row == null){
				$row = jQuery(document.createElement('div')).addClass('row');
			}
			var $dom = jQuery('#thumb-template').clone();
			$dom.attr("id",""); // reset each cloned id
			$dom.find('img').attr('src', "//img.terpthon.org/miraclekids/thumb/"+ mk[i].id +".jpg");
			$dom.find('.mk-name').text(mk[i].name);
			$dom.attr("data-id", mk[i].id); //Unique id used to populate the modal dialog
			$row.append($dom);
			$dom.show();
		}
		$container.append($row);

	jQuery(".thumb-container").on('click', function(e){
		// Most click events will occur on child elements of the container div
		// so we search for the nearest container to get the data
		var child_id = jQuery(e.target).closest(".thumb-container").data("id");
		var child_data = getChildData(child_id);
		populateModal(child_data)
	});

	// Populate the dialog with the child data
	function populateModal(cd) {
		$m.find(".modal-title").text("Meet " + cd.name);
		var $list = $m.find("ul").empty(); // Clear old list items
		var $listItem;
		for (var i = 0; i < cd.about.length; i++){
			$listItem = jQuery(document.createElement('li')).text(cd.about[i]);
			if (i+1 == cd.about.length){
				$listItem.addClass("italicized"); // The child diagnosis is italicized
			}
			$list.append($listItem);
		}
		$m.find('.paragraph').text(cd.paragraph);
	}

	// Retrieves child data from the list based on a child_id
	function getChildData(child_id){
	    var data;
	    try{
	        data = mk.filter(function(e){
	           return e.id==child_id;
	        })[0];
	    }catch(err){
	       data = "No Matching Miracle Child Found";
	    }
	    return data;    
	}
});
</script>
<!-- Thumbnail Template -->
<div id="thumb-template" class="thumb-container col-sm-3" style="display: none;">
	<a href="#" data-toggle="modal" data-target="#modalPopup">           
		<img src="" class="img-thumbnail">
		<br>
		<h3 class="mk-name"><h3>
	</a>
</div>

<!-- Modal -->
<div class="modal fade" id="modalPopup" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Meet *insert child name based on click event data here*</h4>
			</div>
			<div class="modal-body">
				<ul type="disc">
					<!-- Append li items to populate me! -->
				</ul>
				<div class="paragraph"></div>
			</div>
		</div>
	</div>
 </div>

<div class="content">
	<h1> Miracle Kids </h1>
	<br>
	<div class="mk-container column-override">
	</div>
</div>




<?php
include("includes/footer.inc.php");
?>