# Designing for User Experience: Assignment 2

This assignments objective is to revise the previous wireframe and produce a prototype fitting it.


## Aims

Here are the listed Aims for the assignment:

 - Adhere to previous work: Stick to and improve upon the initial design by refining wireframes based on specific peer and tutor 
feedback to resolve identified issues.
 - Implement Design: Utilise modern CSS techniques to ensure the website works as intended and looks pleasing to the eye.
 - Universal Accessibility: Develop a site that meets standard accessibility requirements to ensure a seamless experience for users with visual impairments.
 - Dynamic Interactivity: Enhance user engagement by integrating functional forms and at least one external service-based extension (such as a Map or Weather API) to provide real-world utility.
 - Ensure Code Integrity and Documentation: Produce clean, industry-standard code validated by W3C, supported by a comprehensive README that reflects on the design-to-development lifecycle and manual testing outcomes.

        Recap of Assignment 1:
        The main points from the user stories were:
        - Easy navigation for mobile phone number
        - A Hardware tab for users to understand what the the parts of a pc do and how upgradable they are
        - A form detail the users issues with thier system, that can be sent in for review

## Development

### Tools and Techniques:

- **Media Queries:** I wanted to make sure the webpage would adapt to whatever size device it was being accessed on, luckily media quieries solves this problem. We can define tablets from computers by the size of thier screen, then format the site a different way. This explains it better: [W3Schools](https://www.w3schools.com/css/css_rwd_mediaqueries.asp).

- **Navigation Bar:** Most websites nowadays use a navigation bar at the top part of the screen. I decided to do the same. This stays consistent at the top of the screen, helping users navigate easily between pages. It also highlights what page you're currently on, reducing the amount of users lost.
  <img src ="/images/navBarHome.png" alt = "Navigation bar for website of home page"><br>
  <img src ="/images/navBarCommonIssues.png" alt = "Navigation bar for website of common issues page"><br>

- **FlexBox:** The Flex type can be used to make things attached to it (mainly containers) adapt to the screens size, in conjuctiuon with max size settings, this can very useful in formatting. This was also used to make a sticky footer, that automatically expands as the website grows.
  <img src ="/images/flexCommonIssues.png" alt = "Showcase of flexbox grid of website"><br>

- **Google Maps:** Using the Iframe type, this allows data from foregn website to appear on home website. Using google maps, we can then go to any location listed, grab a specific url and use that to get a fully interactive map working in a little amount of effort.
  <img src ="/images/findUsMap.png" alt = "Google maps working on website"><br>

- **PHP Form:** This form collects all the data input from the 'Contact Us' page, and mimics it being sent away and recived by the fictional repair company. This will only work if a local host server is running within the folder however.
  <img src ="/images/contactUsForm.png" alt = "Contact us form for website"><br>

### Challenges

**Form Layout on Mobile/Smaller Screens**

Challenge: Contact form places first name and last name side by side, however this was getting too narrow to comfortably read on smaller devices.

Fix: Introduced a media query for screens under 600px that would change from side by side, to coloumn, thus solving the issue.

**Initial Design of Hardware Guide**

Challenge: First design looked like a wall of text, boring to read and doesn't align with personas from previous assignment.

Fix: Using the template create from the Common Issues page, I utilised the same flexbox grid method, to give page more life. This made it easier to read and improved on gernal looks of the webpage.

## Testing

**Referencing the user personas:**
- Phone Number: This target was reached, on every page the phone number is included within the navigation bar (see above).
- Hardware Guide: This was added specifially for this request, displayed in an easy to read fashion:
  <img src ="/images/hardwareGuideFlex.png" alt = "Flexbox grid for hardware guide"><br>
  
- Repiar Form: This has also been met. The form is able to be recieved if local host is running condesing the infomation given in a nice format.

### W3C Validators:
Both resulted in a pass with no errors.

**CSS:**
<img src ="/images/cssPass.png" alt = "W3C results CSS"><br>

**HTML:**
<img src ="/images/htmlPass.png" alt = "W3C results HTML"><br>


### Google Lighthouse results:

DISLCAIMER: For some reason I couldn't get the performance tab to work with google lighthouse, however the other catagories I managed to gather.

**Accessibility:**
<img src ="/images/lighthouseAccessibility.png" alt = "Results for google lighthouse accessability"><br>

**Best Practices:**
<img src ="/images/lighthouseBestPractices.png" alt = "Results for google lighthouse best practicies"><br>

**SEO:**
<img src ="/images/lighthouseSEO.png" alt = "Results for google lighthouse SEO"><br>


