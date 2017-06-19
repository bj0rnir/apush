<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="jquery/external/jquery/jquery.js"></script>
        <script type="text/javascript" src="jquery/jquery-ui.js"></script>
        <link rel="stylesheet" href="jquery/jquery-ui.theme.css">
        <script type="text/javascript" src="ajax.js"></script>
        <script type="text/javascript" src="apush.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".tabs").tabs();
                $( ".accordion" ).accordion();
                $('#unit5').click(function(){
                    hideAllUnits();
                    showUnit($("#unit5"));
                });
                $('#unit6').click(function(){
                    hideAllUnits();
                    showUnit($("#unit6"));
                });
            });
        </script>
        <style>
            body {background-color: #2a2a2a;}
            ul.tabs {
                height: 30px;
                font-size: 20px;
                padding-bottom: 12px;
                display: inline;
                padding-right: 5px;
                padding-left: 5px;
                padding-top: 5px;
            }
            ul {
                margin: 0px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .tabs {
                position: absolute;
                left: 20%;
                top: 0px;
                padding: 10px;
                margin: 0px;
                float: right;
               
                display: inline-block;
                width: 70%;
                
            }
            h2 {display: inline;
            font-size: 20px;}
            img {
                width: 100%;
                height: 100%;
            }
            #traceroute {
                width: 100%;
              
            }
            #svgimg{max-height: 2000px;}
            #field {width: 100%;}
            #results {width: 100%; float: left; display: inline-block;}
            fieldset {border-radius: 5px;}
            label {
                padding-left: 10px;}
            .customportfield{width: 60px;}
            h3 {
                font-size: 30px;
                text-align: center
            }
            #supporters {
                width: 45%;
                float: left;
                display: inline;
            }
            #opposers {
                float: right;
                display: inline;
                width: 45%;
            }
            #scopes {
                width: 100%;
                height: 100%;
            }
            p.flags {
                padding: 10px;
            }
            .units {
                display: inline-block;
                float: left;
                width: 19%;
            }
            p.units {
                text-align: center;
                
            }
        
        </style>
        <title></title>
    
    </head>
    <body>
        <div class="units">
            
                <p color="white" id="unit5">Unit 5</p>
                <p color="white" id="unit6">Unit 6</p>
            
        </div>
        <div class="tabs">
              <ul>
                <li><a href="#scopes">Scopes Trial</a></li>
                <li><a href="#article">Roaring Twenties Article</a></li>
                <li><a href="#1920society">1920's Society</a></li>
              </ul>
              <div id="scopes">
                  <h3>The Scopes Trial</h3>
                  
                  
                  <fieldset id="supporters">
                  <legend>Butler Act Supporters: </legend>
                      <ul>
                      <li><strong>- The State of Tenn.</strong></li><br>
                      <li><strong>- Fundamentalists</strong></li><br>
                      <li><strong>- William Jennings Bryan </strong>(defended the state of Tenn.)</li><br>
                      </ul>
                      
                      <fieldset id="sources">
                            <legend>Sources</legend>
                      <div class="accordion">
                          <h3>Reverend John Roach Straton</h3>
                          <div>
                              <p><strong><i>"The most sinister movement in the United states"</i></strong> by Reverend John Roach Straton published by <strong><i>American Fundamentalist</i></strong> on <i>December 26th, 1925</i></h2>
                              <p>The reverend jumps straight into expressing his dissaproval of teaching evolution in public schools. He argues that areas more absent from religion have greater crime rates and worse living conditions.</p>
                                <p><strong><i>"John Scopes’s lawyers left New York and Chicago, where real religion is ignored"</i></strong> - Reverend John Roach Straton</p>
                          </div>
                          <h3>Mrs. Jesse Sparks</h3>
                          <div>
                              <p><strong>Source: </strong>A letter to a newspaper editor in Tennessee written by <strong>Mrs. Jesse Sparks</strong> on <i>July 3rd, 1925.</i></p>
                                <p>Mrs. Sparks expresses her gratitude that the decision to forbid the teaching of evolution in schools was made based on faith. Her argument imposes that laws should be shaped to accomodate the demands of Christians above all else and that those with opposing views must adapt.</p>
                                <p><strong><i>"I for one was grateful that they stood up for what was right. And
grateful, too, that we have a Christian man for governor..."</i></strong> - Mrs. Jesse Sparks</p>
                          </div>

                      </div>
                      </fieldset>
                  </fieldset>
                  
                  
                  <fieldset id="opposers">
                  <legend>Butler Act Opposers: </legend>
                      <ul>
                      <li><strong>- John Scopes</strong></li><br>
                      <li><strong>- American Civil Liberties Union (ACLU)</strong></li><br>
                      <li><strong>- Clarence Darrow<i></strong> (defended Scopes during the trial)</i></li><br>
                      </ul>
                      
                  
                  <fieldset id="sources">
                  <legend>Sources</legend>
                      <div class="accordion">
                          <h3>New York Times</h3>
                          <div>
                              <p><strong><i>"New York Times"</i></strong> front page article published on <i>July 11th, 1925</i> </h2>
                              <p>The excerpt from this article contrasts urban lifestyle in America with the rural lifestyle more common in southern states like Tennessee. He singles out (with a slight tone of ridicule) the Christian practices that many worshippers see as normal when non-religious people see them as alien. The article even goes so far as to compare the promises of heaven, hope, joy, and Jesus conjured by the Bible to the facade of false-advertisement that line every surface at eye-level.</p>
                                <p><strong><i>"They walked up and down hot, dusty Market Street, with its buildings hung with banners, and lined with soda-water, sandwich, and book stalls, as for a carnival. Religion and business had become strangely mixed."</i></strong><i>    -The New York Times, "Cranks and Freaks Flock to Dayton"</i></p>
                          </div>
                          <h3>Dudley Field Malone</h3>
                          <div>
                              <p><strong>Source: </strong>A speech given on the fourth day of the Scopes trial by <strong>Dudley Field Malone</strong> on <i>July 15th, 1925.</i></p>
                                <p>In his speech, Malone condemns ignorance. He states that facts should be questioned and that Americans should not follow instructions so easily given by a book. Progress, he says, is the only thing we can strive for that will always yield a result. Malone further explains that assumptions close doors with every person's acceptance of them, and that the best thing we can do for our children is to let them have an open mind that progresses with experience.</p>
                                <p><strong><i>"For God’s sake let the children have their minds kept open—close no doors to their knowledge..."</i></strong> - Dudley Field Malone</p>
                          </div>

                      </div>
                     </fieldset>
        </fieldset>
                  
                  
            </div>
            <div id="article"><h3>Magazine Article</h3>
                <fieldset>
                    <legend>A Changing Role for Women in America</legend>
                    <p>     On June 4th, 1919, our country gained twice as many citizens. Every woman in 
                        America was instantly granted their unalienable right to vote, bringing an entirely new populaton
                        to the polls. After the woman relentlessly cast their votes with guaranteed secrecy as a U.S. citizen,
                        they realized that their will could be voiced freely. During WWI when men flocked overseas, press-fueled 
                        war support was contagiously spreading. I believe that this propaganda spoke loudest to women because not
                        only could they help their husband from thousands of miles away, they could play a key role in the allies' victory. </p>
                        <p>This newfound confidence spread like wildfire, igniting on November 11th, 1918 when the war ended. Women proudly shared
                        the victory with every allied soldier carrying a gun. After the war when the economic boom surged 
                        like a current through the early twenties, women already held a tight grip on the industrial workforce. 
                        With all of this power suddenly flooding women across America, there were a handful of brave women who finally understood:
                        Women are American citizens, which means they don't have to cater to their husband's every whim.
                        These girls were called "flappers". </p>
                        <p>Flappers cut their hair short, listened to jazz, drove cars, smoked in public, wore short skirts, and treated sex in a casual manner.
                            Basically, if you disrespected your wife's constitutional rights, she was gone. I think this was HILLARIOUS.
                            I can only imagine that the men who grew up seeing women cook their meals and wax their floors and raise their children saw these girls
                            and made the same face my grandfather makes when he hears rap music. What were they going to do, give up women?
                            HAH!! Where one gender goes, the other follows. This is ESPECIALLY true for when women decide they want nothing to
                            do with a man. That man will go through a list of assorted emotions then show up at your doorstep.
                    </p>
                </fieldset>
            </div>
    
            <div id="1920society"><h3>Society and Innovation of the 1920s</h3>
            </div>
        </div>
        
    </body>
</html>
