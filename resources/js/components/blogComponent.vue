<template>
	<div>
		<div id="carousel">
			<b-carousel
				id="carousel-1"
				v-model="slide"
				:interval="0"
				controls
				indicators
				background="white"
				img-width="500px"
				img-height="500px"
				style="text-shadow: 1px 1px 2px #333;"
				@sliding-start="onSlideStart"
				@sliding-end="onSlideEnd"
			>
				<b-carousel-slide
					v-for="post in posts"
					:key="post.id"
					:caption="post.title"
					
				>
				<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
       <p>{{post.text}}</p>
        <a :href="post.link" class="btn-btn-light">Video Blog</a>
      </div>
    </div>
  </div>
	</div>
				</b-carousel-slide>
			</b-carousel>
		</div>
	</div>
</template>

<script>
	export default {
		name: "blog-component",
		data() {
			return {
				slide: 0,
				sliding: null,
				posts: [
					//prework
					{
						id: 0,
						title: "Phhhhhhhhhre-Work ",
						text: `Before starting class we were given four weeks of work to do just to make sure we all entered into class with a little foundation.
			                  The prework wasnt too challenging, and I enjoyed getting a small insight into what class would be like. 
			                  The topics that were covered included HTML CSS and some javascript. 
			                  I have some experience with these so I never really ran into any challenges completing the projects.
			                  I am excited to begin learning full time, and can't wat to see how far I go in the the twelve weeks.`,
						
						link:"" 
					},
					//week
					{
						id: 1,
						title: "Week 1 ",
						text: `This first week was a little overwhelming. I was excited to finally be in class and see what kind of magic they were going to do to turn me into a developer. 
	                  I was relieved to find out that most of the students were beginners as well. 
	                  This gave me a sense of relief because I was really concerned I would be the only one without some kind of coding background.
	                  We started the first day off with javascript warm up’s. It was a little daunting and caused me to doubt myself very early in the morning. 
	                  I was discouraged but found it a little comforting that I seemed not to be the only one confused. Fortunately our warm up coach and teachers were there to explain, answer any questions we had and walk us though solving the problem. With their help I felt more comfortable and confident with continuing on the rest of the class.
	                  Over the rest of the week we learned a lot about writing HTML, CSS and Bootstrap. We made a campaign website for our first project. I enjoyed using Bootstrap and CSS to design my page. That’s really what interested me in coding in the first place.
	                  I enjoy watching a blank webpage become something great.`,
						link: "#",
						
					},
					//week2
					{
						id: 2,
						title: "Week 2 ",
						text: `I felt way more confident starting this week. The first warmups of the week were tough, but I felt like I knew how to approach them, and a couple of them I even solved.
	                    My confidence quickly faded when we were tasked with creating a tic tac toe gam and calculator. My first instinct was to google “how to . . . . “ but I wanted to “jump off the cliff,” and build them up from scratch. IT. WAS. A. MISTAKE. 
	                    Just kidding. I was happy I got the experience of writing down what I needed and finding the JS methods to make them functional. The downside of it was I became overwhelmed many times while completing the exercises. I also feel like I fell behind this week because I was determined to build them myself but it took me way more time than anticipated.
	                    Overall this week was great. I am enjoying my Time in camp, and I am really excited to see what come in the next week.`,
						link: "#",
						
					},
					//week3
					{
						id: 3,
						title: "Week 3 ",
						text: `I started off this week feeling pretty overwhelmed. I am still playing catchup with my exercises but I'm slowly but surely getting it together.
	                We started learning Vue this week. I was really excited to dive into it because we were told it would make javascript easier(THANK GOD). Im hoping the "easier" part comes soon because I'm not really seeing it.
	                Our Vue project is to make a ToDo list. I'm trying to make it as simple as I can, getting caught up on design has been by downfall lately. I have to remember that I can always go back and fix things later.
	                I am excited and feel like we're really picking up momentum. Two weeks ago I wasnt sure I could be a developer and now i feel like im almost there.`,
						link: "#"
					},
					
					//week4
					{ id: 4, title: "Week 4 ", text: "", link: "#", image: "#" },
					//week5
					{ id: 5, title: "Week 5 ", text: "", link: "#", image: "#" },
					//week6
					{ id: 6, title: "Week 6 ", text: "", link: "#", image: "#" },
					//week7
					{ id: 7, title: "Week 7 ", text: "", link: "#", image: "#" },

					//week8
					{ id: 8, title: "Week 8 ", text: "", link: "#", image: "#" }
					/*
				          //week9
				          { id: 9, title: " ", 
				            text:"", link: "href=''",
				          },
				          //week10
				          { id: 10, title: " ", 
				            text:"", link: "href=''",
				          },
				          //week11
				          { id: 11, title: " ", 
				            text:"", link: "href=''",
				          },
				          //week12
				          { id: 12, title: " ", 
				            text:"", link: "href=''",
				          }, */
				]
			};
		},
		components: {},
		methods: {
			onSlideStart(slide) {
				this.sliding = false;
			},
			onSlideEnd(slide) {
				this.sliding = false;
			}
		},
		computed: {}
	};
</script>
<style scoped>
	#carousel {
		height: 50%;
		width: 50%;
		margin-right: auto;
		margin-left: auto;
	}
	#postText {
		font-size: 10px;
	}
</style>
