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

/*.img-thumbnail {
	height: 175px;
	width: 175px;
}*/

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
					"about":["April 22, 2003", "Seasoned Marathoner", "Future Terp Techie", "Hypotonic Cerebral Palsy"],
					"paragraph": "​Alexander was diagnosed with hypotonic cerebral palsy at age 3 and has since spent countless days at Children’s National working on his mobility with the occupational and physical therapy team. He keeps plenty busy with the broadcasting team at school and playing piano and drums. Alexander is known to be one of the toughest judges for Terp Thon’s annual a cappella competition, in which his brutally honest critiques are often the most entertaining of the night. He recently completed his first 5k and plans on participating in more marathons! An honor roll student, Alexander hopes to attend UMD like his dad did, and wants to pursue a career in cyber security, a springboard from his love of video games. In 2011, Alexander and his twin sister Tess were named DC’s Children’s Miracle Network Champions. “Our kids can’t always do what their peers can do. But being a part of the Children’s Miracle Network gives them the opportunity to do what their peers can’t,” said their mother." 
				},
				{
					"id":"Tess", 
					"name":"Tess", 
					"about":["April 22, 2003", "Minecraft Expert", "A capella fan", "Hemiplegic Cerebral Palsy"],
					"paragraph": "Ever since Tess was diagnosed with hemiplegic cerebral palsy at age 2, she has undergone treatments to increase her mobility, as well as ongoing physical and occupational therapy at Children’s National. Today, she is proud to be on the honor roll and is involved in a variety of activities – Sea Perch underwater robotics, piano, guitar, and Youth Group at church. Tess says that her proudest moment was when she was able to answer high school level questions at a U.S. Naval Academy interview. Her favorite celebrities are Taylor Swift and Dove Cameron, and she has an impressive world built in Minecraft! Tess and her twin brother Alexander were named DC’s 2011 Children’s Miracle Network Champions. Tess is a self proclaimed a cappella enthusiast and looks forward to attending Terp Thon’s annual a cappella show every spring!"
				}, 
				{
					"id":"Amanda", 
					"name":"Amanda",
					"about":["April 7, 2003", "Helped raise $2,290.52 FTK at her school", "Soccer powerhouse", "Ewing’s Sarcoma"],
					"paragraph": "Nothing can stop Amanda - not a bone cancer diagnosis, not fourteen rounds of chemotherapy, and certainly not a prosthetic leg. Just after her second birthday, Amanda was diagnosed with Ewing's Sarcoma and immediately underwent treatment at Children's National. At only two-and-a-half years old, she had her left leg amputated and replaced with a prosthesis, which she now affectionately refers to as her “J-leg.” Amanda is able to run and play like any other freshman in high school – in fact, her friends have a hard time keeping up with her. Amanda is one of the fastest girls on her soccer team and is proud to say that she has scored a goal with her J-leg! She is a fan favorite at Terp Thon and rallies the crowd with her rendition of “Stronger” by Kelly Clarkson, while dancing around on her J-leg. Says Amanda, “I had cancer. Now, thanks to Childrens National, I have a really cool robot leg that helps me walk. Everyone in my class wishes they had a robot leg, too!”"
				},
				{
					"id":"Brooke", 
					"name":"Brooke",
					"about":["July 25, 2008", "2014 Children’s Miracle Network Champion", "Wishes to 'fly and eat all candy'", "Acute Myeloid Leukemia"],					 
					"paragraph": "At just 2 years old, Brooke went from playing on the playground to being diagnosed with acute myeloid Leukemia in the blink of an eye. Brooke immediately started chemotherapy but doctors said a bone marrow transplant was necessary to save her life. Luckily, Brooke’s sister Caitlin was a perfect match and willingly stepped up to save her sister’s life. Brooke is now seven and there are no signs of the cancer recurring! Her performances at past Terp Thon has defined her as annual show-stealer; this past Terp Thon, Brooke belted out “Fight Song” on stage. Brooke dreams of someday being able to “fly and eat all candy,” but in the meantime, spends her days riding bikes and playing with her sister. Brooke and Caitlin have a bond like no other sisters and are the best of friends."
				},
				{
					"id":"Caitlin", 
					"name":"Caitlin", 
					"about":["December 29, 2004", "2014 Children’s Miracle Network Champion", "Ambitious gymnast", "Bone Marrow Transplant"],
					"paragraph": "Sisters share a lot of things: toys, clothes, and for some, even bone marrow. Caitlin was just five years old when her younger sister, Brooke, was diagnosed with leukemia. A bone marrow transplant was Brooke’s best chance for survival, and Caitlin happened to be a perfect match. Without fear, Caitlin volunteered herself to save her sister’s life. Now, seven years later, the two are both healthy with a bond stronger than most. The transplant did not slow Caitlin down at all; she has participated in races and kid’s dashes that benefit causes such as Children’s National and cancer research. She is an ambitious gymnast and was named DC’s 2014 Children’s Miracle Network Champion, along with Brooke!"
				},
				{
					"id":"Caleb", 
					"name":"Caleb", 
					"about":["February 19, 2014", "Hypoplastic Left Heart Syndrome"],
					"paragraph": "Caleb was prenatally diagnosed with hypoplastic left heart syndrome and was immediately rushed to Children’s National upon birth. Caleb had open heart surgery when he was less than a week old and had to stay at the hospital for four months due to complications and other procedures. In spite of all of this, he is now a thriving toddler who loves playing with his twin brother Jonah! "
				},
				{
					"id":"Carsten", 
					"name":"Carsten", 
					"about":["October 6, 1999", "Designed a board game to teach kids about cancer", "Featured on Cheez-It boxes", "Acute Lymphoblastic Leukemia"],
					"paragraph": "When Carsten first thought about what he wanted from the Make-A-Wish Foundation, he knew that he wanted it to benefit other kids. He ended up designing a board game to teach kids about cancer - a subject he knew very well because he had been diagnosed with acute lymphoblastic leukemia only two years prior. Carsten underwent chemotherapy at Children’s National and went into remission when he was 12! In 2012, he spoke at a pre-race event for the Cherry Blossom Run and went on to run the 5k. He was also featured on special edition boxes of Kellogg’s Cheez-It crackers as part of a campaign to benefit Children’s Miracle Network."
				},
				{
					"id":"Chase", 
					"name":"Chase", 
					"about":["August 12, 2005", "Damaged Esophagus and Epiglottis"],
					"paragraph": "Chase was 3 years old when he accidentally dipped his toothbrush into a lye-based drain cleaner, ingesting some of it. He was unable to swallow or breathe due to the damage on his epiglottis and esophagus. He spent three weeks at Children’s National PICU until he was stable enough to undergo surgery. The scarring in his throat narrowed his airway and required him to get a tracheotomy. Luckily for Chase, his vocal chords and voice box were not damaged and the tracheotomy should be removed by adulthood. Chase is now thirteen years old and a happy and healthy child. Chase looks beyond the limitations of his tracheotomy and is excited for the day when he can swim and eat “real” food. Chase was named D.C’s 2016 Children’s Miracle Network Champion. This recognition is given to children who have personally benefited from charitable donations to Children’s National."
				},
				{
					"id":"Colton", 
					"name":"Colton", 
					"about":["September 24, 2002", "Favorite anesthesia flavor is chocolate", "Dopa-Responsive Dystonia"],
					"paragraph": "As a toddler, Colton had trouble walking and was experiencing muscle spasms, cramped feet, and unusual gait. After frequent visits to the emergency department, Colton was diagnosed with Dopa-reponsive dystonia. The doctors at Children’s National prescribed him L-dopa, which helped him walk more smoothly. Says his mother, 'He’s just a rare person. He always has a smile on his face. He’s always happy, always telling a joke. He’s very unaffected by it.' Today, Colton enjoys biking and swimming with his little brother Connor!	"
				},
				{
					"id":"Fionn", 
					"name":"Fionn", 
					"about":["March 28, 2010","Honorary member of the Maryland Men's Lacrosse Team","Acute Lymphoblastic Leukemia "],
					"paragraph": "When Fionn was only two years old, he was diagnosed with Acute Lymphoblastic Leukemia, the most common type of cancer in children.  Thanks to Children’s National Health System, Fionn has been able to grow stronger and stronger every day. Fionn continues to respond well to his treatment and his last chemotherapy session is scheduled for the first week in October.  If everything goes well, Fionn will be on the road to being declared cancer-free!  Through all of his treatment, Fionn remains a happy and optimistic kid, always keeping a smile on his face.  Fionn is also an honorary member of the Maryland Men’s Lacrosse Team, and he loves the team so much, he says he will only listen to the music the guys play in the locker room...(as long as it’s clean!)"
					},
				{
					"id":"Jack", 
					"name":"Jack", 
					"about":["June 24, 1998","Skilled golfer","Advocated in front of Congress","Germinoma"],
					"paragraph": "Jack’s life strategy is simple to him: when faced with difficulties, he thinks back to his battle with cancer. Now, everything else seems easy in comparison to fighting and beating his disease. When he was 10 years old, Jack was diagnosed with diabetes and eventually germinoma after exploratory brain surgery. He underwent several rounds of chemotherapy and was declared in remission after three months! He is now 19 years old and a member of the golf team at his high school. Jack is often seen playing with a PING hat that was gifted to him by pro golfer Hunter Mahan during his Make-A-Wish trip. Jack says about his fight with cancer, “It gave me a new perspective on life that you can’t really take life for granted. You gotta look at the little things and appreciate them, just know how many blessings you have.”"
				},
				{
					"id":"Jaiwen", 
					"name":"Jaiwen", 
					"about":["January 27, 1999","Senior Class President","$44,358.89 for Terp Thon at his school ","Osteosarcoma"],
					"paragraph": "Jaiwen always knew he wanted to give back to Children’s National – after all, it had become his second home and the doctors there saved his life. When Jaiwen was 11-years-old, a soccer injury turned out to be osteosarcoma, a form of bone cancer. He underwent a year of chemotherapy and had part of his left femur amputated and replaced with a titanium prosthesis, which required him to learn how to walk again. He also has a titanium bar spanning his chest, and his family has since affectionately dubbed him “Man of Titanium.” Jaiwen started Walk Away Cancer in the fall of 2014 at his high school to raise money and awareness for pediatric cancer. The event raised $44, 358.89 for Children’s National’s Center for Cancer and Blood Disorders in its second year, which was an 80% increase from the amount raised in its first year! He currently serves as Class President, is an aspiring poet, and enjoys giving motivational speeches about his experiences."
				},
				{
					"id":"Kierslyn", 
					"name":"Kierslyn", 
					"about":["July 30, 2002","Wants to pursue a computer science at UMD","Loves Minecraft","Ehlers-Danlos Syndrome"],
					"paragraph":"For Kierslyn, the Pain Clinic at Children’s National was the only place she could find relief. When she was only 7 months old, Kierslyn was diagnosed with Ehlers-Danlos syndrome. This marked the start of a long journey filled with excruciating pain, wheelchairs, and missed school days. However, due to the innovative pain management tactics at Children’s National, Kierslyn’s doctors were able give her neck, back, and hip injections to manage her pain and help her return to a normal life of going to school, watching sports, and playing computer games. Kierslyn hopes to become a Terp one day and study computer science! "
				},

				{
					"id":"Luca", 
					"name":"Luca", 
					"about":["August 6, 2010","Urea Cycle Disorder"],
					"paragraph":"Luca was born with urea cycle disorder, a rare genetic disorder that inhibits the liver from processing proteins. Her condition was so severe that at 4 months old Luca was in need of a liver transplant, but finding a match at the time was very difficult. Thankfully, her father was tested as a match and was able to donate some of his liver to her. The surgery was successful and after months of being in and out of the hospital, Luca is now residing at home! Today, Luca is a happy and healthy six year old who enjoys listening to music and playing with her dog Tessa. In 2014, Luca and her family participated in Children’s National’s Race For Every Child 5K in which they raised $1,317.00 to give back to the hospital. “‘Thank you’ just doesn’t seem to be quite enough, but for the [Children’s National] doctors, nurses, technicians, and staff who we never thought we’d need, but have helped Luca, thank you,” says Luca’s mother, Katie."
				},

				{
					"id":"Mordekai", 
					"name":"Mordekai",
					"about":["August 16, 2010","Hopes to be a Super teacher one day"],
					"paragraph":"Minutes after Kai was born he underwent his first surgery that saved his life.  Kai was born with a cleft palate, tied tongue, Cerebral Palsy, restrictive airways, Perthese of the hip, a brain bleed, and he was missing his nerve that separates his left and right brain.  Kai spent his first three years of life with a tracheotomy tube, as well as undergoing many difficult surgeries.  Even after six years of 24 painful surgeries, Kai is an angel to be around with a smile that you can’t help but smile along with!  Kai loves to play soccer, ride his bike, and play on his grandparent’s farm.  Kai loves superheroes and hopes to one day be a teacher.  He loves performing magic tricks and watching his favorite WWE wrestler, John Cena!"
				},

				{
					"id":"Noble", 
					"name":"Noble", 
					"about":["March 29, 2004","2015 Children’s Miracle Network Champion","Proud owner of a Redskins logo emblazoned-prosthetic","Leg Amputation from Lawn Mower Accident"],
					"paragraph":"One summer night, when Noble was 5, he was out playing in his yard while his dad was mowing the lawn. Somehow, Noble’s leg got caught under the blades of the lawnmower, destroying his Achilles tendon and most of his calf muscle. Doctors at Children’s National had hoped to save his leg but unfortunately had to amputate the lower part to give him the best quality of life. However, the amputation did not slow Noble down in any way. Months after the surgery, Noble started kindergarten, walking in with his “bionic, transformers leg.” Now 13, Noble can do everything other kids can do! Noble loves to swim and play golf, and his prosthetic doesn’t stop him from leading dance lines at Terp Thon. Noble was named the 2015 DC’s Children’s Miracle Network Champion, and traveled to Atlanta in summer 2015 to advocate for funding for the Network!"
				},

				{
					"id":"Olivia", 
					"name":"Olivia", 
					"about":["April 20, 2004","Nicknamed “Princess of Cardiac Intensive Care Unit”","Wants to be a cardiologist for kids","Cardiomyopathy"],
					"paragraph": "Olivia was born in April 2004 and was admitted into Children’s National just six months later. What originally was thought to be pneumonia turned out to be a severe heart problem that would require a heart transplant. When she was two, Olivia underwent the transplant surgery after finding a match and received her new heart. Now, ten years after her surgery, Olivia is a healthy 13 year old who dreams of becoming a cardiologist to help kids like herself. Olivia is a blast to be around and she loves singing and dancing with her friends, especially to Taylor Swift. She out-danced many of the dancers at this past Terp Thon when she showed off her moves for the whole 12 hours! She also took the stage this past March to share her Beads of Courage, a long necklace made of individual beads, each representing her bravery and strength in undergoing different procedures."
				},

				{
					"id":"Ryan", 
					"name":"Ryan", 
					"about":["May 3, 2005","Member of the “President’s Committee on People with Intellectual Disabilities”","Superhero fanatic","Dandy-Walker Malformation"],
					"paragraph":"For the first 94 days of Ryan’s life, he slept in an incubator in Children’s National’s Neonatal Intensive Care Unit. His big toe was the size of a tic-tac, and he was diagnosed with Dandy Walker syndrome and hydrocephalus, both of which are brain abnormalities that that cause excess fluid in the brain. He underwent multiple surgeries to control the fluid buildup and reduce his seizures. Ryan is now a thriving twelve year-old boy and “Today Ryan…walks, talks, runs, screams, kicks, throws, and terrorizes the family cat,” says his parents. In 2008, George W. Bush honored Ryan by naming him a member of the “President’s Committee on People with Intellectual Disabilities.” The Cole family started a nonprofit group, the Dandy Walker Alliance Inc., that helps to raise awareness and funding for Dandy-Walker syndrome, as well as to unite other families in this common goal."
				},
				{
					"id":"Sammy", 
					"name":"Sammy", 
					"about":["January 26, 2011","Tetralogy of fallot & a large ventricular septal defect"],
					"paragraph":"Soon after Sammy’s birth, doctors diagnosed him with tetralogy of fallot and a large ventricular septal defect. Both of these congenital heart defects were treatable, but Sammy would have to wait until he was 3 months old for surgery. It only took two weeks after birth before a turn of events; Sammy was admitted into Children’s National with signs of heart failure. Children’s National performed open heart surgery within a week of his admittance to repair both of his conditions. Sammy responded so well to surgery that he was able to leave the Cardiac ICU in half the time that was expected! Today, Sammy is a happy six year old who never stops smiling. He enjoys running, climbing and playing with his older sister, Reese. Sammy’s mother says “We are truly humbled by Sammy’s ability to heal and amazed by the talent and level of excellence of care that we received at Children’s National”. "
				},

				{
					"id":"Samerya", 
					"name":"Samerya", 
					"about":["December 22, 2010","Future nurse","Beyoncé fan","FSGS/Nephrotic Syndrome"],
					"paragraph":"Samerya is a five year old with big dreams: she aspires to be a nurse when she is grown up so that she can take care of people with the same love and support that the nurses at Children’s National have shown her. Samerya has Focal Segmental Glomerulosclerosis (FSGS)/Nephrotic syndrome, a form of kidney disease that prevents her body from breaking down proteins. Despite this, Samerya is an active and fun-loving ball of energy! She loves to hula-hoop and her favorite color is yellow. She was seen at Terp Thon this past year signing autographs for all of the dancers."
				},

				{
					"id":"Tara", 
					"name":"Tara", 
					"about":["February 17, 2005","Softball all-star","Dreams of being a police dog trainer","Astrocytoma"],
					"paragraph":"The first time Tara shared her inspirational story on stage at Terp Thon, the entire room was filled with echoes of the audience chanting her name in solidarity and awe. In February 2013, Tara was diagnosed with grade 2 astrocytoma, a rare form of brain cancer. Doctors found three tumors in her brain that were inoperable, so she began 70 weeks of chemotherapy. In January 2015, more tumors were discovered and so Tara is continuing to receive treatment at Children’s National today. Despite the countless surgeries and rounds of chemotherapy, Tara enjoys playing softball, training her dog Caroline, and taking selfies with her friends and family! Despite Tara being one of the newest members of the Terp Thon family, she has already inspired so many of us and cannot wait to be back at more events! Visit her Facebook page, “Pray for Tara,” to stay updated on <a href='https://www.facebook.com/prayfortara'> Tara’s story.</a>"
				},

				{
					"id":"Trevor", 
					"name":"Trevor", 
					"about":["February 3, 2011","Ependymoma"],
					"paragraph":"At five months old, Trevor was away at Ocean City on one of his family’s weekend trips when his first symptoms occurred. He was vomiting nonstop and was soon flown to Children’s National, where was diagnosed with ependymoma. He had a brain tumor the size of a tennis ball that was sitting on his occipital lobe. He had a brain resection and underwent six months of chemotherapy and, in January 2012, an MRI showed he was cancer free! Trevor is now six years old and is often accompanied to Terp Thon events with his siblings. He is an active and exuberant child and loves running around and keeping up with his older brother."
				},

			];

	jQuery(document).ready(function(){
		var $m = jQuery("#modalPopup");
		var $container = jQuery(".mk-container");
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

	// Calculates age from birthday
	function getAge(dateString) {
	    var today = new Date();
	    var birthDate = new Date(dateString);
	    var age = today.getFullYear() - birthDate.getFullYear();
	    var m = today.getMonth() - birthDate.getMonth();
	    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
	        age--;
	    }
	    if (isNaN(age)) {
	    	return null
	    }
	    else {
	    	return age+ " years old";
	    }
	}

	// Populate the dialog with the child data
	function populateModal(cd) {
		$m.find(".modal-title").text("Meet " + cd.name);
		var $list = $m.find("ul").empty(); // Clear old list items
		var $age = getAge(cd.about[0])
		var $ageItem = jQuery(document.createElement('li')).html($age);
		$list.append($ageItem)
		var $listItem;
		for (var i = 1; i < cd.about.length; i++){
			$listItem = jQuery(document.createElement('li')).html(cd.about[i]);
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

<div class="jumbotron wide">
    <div class="transbox_one_line_header">
    	<h1>Miracle Kids</h1>
    </div>		
</div>

<div class="content">
	<br>
	<div class="mk-container column-override">
	</div>
</div>




<?php
include("includes/footer.inc.php");
?>