<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>

</head>
<body>
<header>
        <div class="symbol-container">
            <img src="Subject.png" alt="Esoteric Symbol" class="esoteric-symbol">
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="articles.php">Articles</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <!-- Google Translate Widget -->
        <div id="google_translate_element"></div>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    includedLanguages: 'ru,ar'
                }, 'google_translate_element');
            }
        </script>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </header>
    <style>
        /* Base Styles */
 /* Global Styles */
/* Global Styles */
/* Global Styles */
/* Global Styles */
/* Base Styles */
body {
    font-family: 'Times New Roman', Times, serif;
    background-color: #f5f5f5; /* Light gray background */
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

/* Header Styles */
header {
    text-align: center; /* Center align text and contents */
    padding: 10px;
    margin: 0;
    font-size: 18px;
    background-color: #2c3e50; /* Dark background color for header */
    color: white; /* White text color */
}

header .symbol-container {
    margin-bottom: 10px; /* Space below the symbol */
}

header .esoteric-symbol {
    max-width: 80px; /* Adjust size of the symbol */
    height: auto;
}

/* Navigation Styles */
nav ul {
    list-style: none; /* Remove bullet points */
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline; /* Display list items in a row */
    margin: 0 10px; /* Space between items */
}

nav ul li a {
    color: white; /* White text color for links */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Bold text */
}

nav ul li a:hover {
    text-decoration: underline; /* Underline on hover */
}

/* Content Wrapper */
.content-wrapper {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin: 20px auto;
    max-width: 1200px;
    padding: 0 20px;
}

/* Sidebar Styles */
.sidebar {
    flex: 1;
    background-color: #ffffff; /* White background for sidebar */
    padding: 20px;
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for depth */
}

.sidebar h2 {
    font-size: 24px; /* Font size for sidebar title */
    color: #2c3e50; /* Dark blue-gray color for the title */
    margin-top: 0; /* Remove top margin */
    margin-bottom: 20px; /* Space below the title */
}

/* Article List Styles */
#article-list {
    list-style: none; /* Remove bullet points */
    padding: 0;
    margin: 0;
}

#article-list li {
    margin-bottom: 20px; /* Space between list items */
}

#article-list li a {
    text-decoration: none; /* Remove underline */
    color: #2c3e50; /* Dark blue-gray color for links */
    display: block; /* Make entire list item clickable */
    padding: 10px; /* Padding inside each list item */
    border: 1px solid #ddd; /* Light gray border */
    border-radius: 8px; /* Rounded corners */
    transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
}

#article-list li a:hover {
    background-color: #f5f5f5; /* Light gray background on hover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Darker shadow on hover */
}

/* Article Title */
.article-title {
    font-size: 18px; /* Font size for article titles */
    font-weight: bold;
    color: #2c3e50; /* Dark blue-gray color */
    display: block; /* Ensure it appears on a new line */
    margin-bottom: 5px; /* Space below the title */
}

/* Article Part */
.article-part {
    font-size: 16px; /* Font size for article parts */
    color: #34495e; /* Slightly lighter dark blue-gray color */
    display: block; /* Ensure it appears on a new line */
    margin-bottom: 3px; /* Space below the part */
}

/* Article Subtitle */
.article-subtitle {
    font-size: 14px; /* Font size for article subtitles */
    color: #7f8c8d; /* Medium gray color */
    display: block; /* Ensure it appears on a new line */
}

/* Main Content Styles */
main {
    display: flex;
    justify-content: center; /* Center align main content */
    padding: 40px 20px;
}

article {
    background-color: white; /* White background for article */
    padding: 40px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    max-width: 800px; /* Limit the width of the article */
    width: 100%;
}

/* Title, Subtitle, and Section Styles */
.title {
    font-size: 28px;
    font-weight: bold;
    font-style: normal;
    font-family: 'Times New Roman', Times, serif;
    text-align: center; /* Center align the title */
    margin-bottom: 20px;
}

.subtitle {
    font-size: 18px;
    font-style: normal;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    color: black; /* Gray color for subtitle */
    text-align: center; /* Center align the subtitle */
    margin-bottom: 20px;
}

.section {
    font-size: 20px;
    font-weight: bold;
    margin-top: 40px;
    font-style: normal;
    font-family: 'Times New Roman', Times, serif;
    text-align: center; /* Center align the section */
}

/* Paragraph Styles */
p {
    text-align: justify; /* Justify text for better readability */
    margin-bottom: 0;
    margin: 0;
    font-family: 'Times New Roman', Times, serif; /* Set the font family */
    font-size: 18px; /* Set the font size to 18px */
}

/* Blockquote Styles */
blockquote {
    background-color: #f5f5f5; /* Light gray background */
    border-left: 5px solid #2c3e50; /* Dark blue-gray border on the left */
    padding: 10px 20px; /* Padding for block quote */
    margin: 20px 0; /* Margin around block quote */
    font-style: italic; /* Italicize block quotes */
}

/* List Styles */
ul, ol {
    margin: 20px 0; /* Space around lists */
    padding-left: 40px; /* Indent list items */
}

li {
    margin-bottom: 10px; /* Space between list items */
}

/* Footer Styles */
footer {
    background-color: #2c3e50; /* Dark blue-gray background */
    font-size: 18px;
    color: #ecf0f1; /* Light gray-white text */
    padding: 20px; /* Add padding for spacing */
    display: flex; /* Use flexbox for layout */
    flex-direction: column; /* Stack items vertically */
    align-items: center; /* Center content horizontally */
    position: relative; /* Allow absolute positioning within the footer */
    text-align: center; /* Center text for the nav links */
}

footer p {
    margin: 0; /* Remove default margin */
    font-size: 16px; /* Set font size */
    position: absolute; /* Absolute positioning for left alignment */
    left: 20px; /* Adjust as needed */
    top: 20px; /* Adjust as needed */
}

footer nav {
    width: 100%; /* Ensure the nav takes full width */
    top: 0px;
    margin-top: 0px; /* Space between the copyright and the nav */
}

footer nav ul {
    list-style: none; /* Remove bullet points */
    padding: 0; /* Remove default padding */
    margin: 0; /* Remove default margin */
    display: flex; /* Flexbox for horizontal layout */
    justify-content: center; /* Center items horizontally */
}

footer nav ul li {
    margin: 0 15px; /* Spacing between links */
}

footer nav ul li a {
    color: #ecf0f1; /* Light gray-white for links */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Make links bold */
}

footer nav ul li a:hover {
    color: #ecf0f1; /* Light gray-white color on hover */
}

/* Responsive Design */
@media (max-width: 768px) {
    .title {
        font-size: 2em; /* Smaller title on mobile */
    }

    .subtitle {
        font-size: 1.3em; /* Smaller subtitle on mobile */
    }

    .section {
        font-size: 1.1em; /* Smaller section headers on mobile */
    }

    p {
        font-size: 0.9em; /* Slightly smaller font size for paragraphs on mobile */
    }
}


    </style>
</head>
<body>


    <div class="content-wrapper">
    <aside class="sidebar">
        <h2>Article List </h2>
        <ul id="article-list">
            <li><a href="Ar2.html">
                <span class="article-title">A SPECIAL DECONSTRUCTION OF THE ONTOLOGICAL STRUCTURE OF THE REALITY INFORMATION SYSTEM PROGRAM</span>
                <span class="article-part">- PART ONE: MONITORING DEEP STATES OF REALITY AND DISSECTING THE COMPLEX INFORMATIONAL IMPACT ON THE COLLECTIVE HUMAN UNCONSCIOUS</span>
                <span class="article-subtitle">- 1.1. A PRELUDE TO A VARIOUS MYSTICAL VISION</span>
            </a></li>
            <li><a href="Ar3.html">
                <span class="article-title">A SPECIAL DECONSTRUCTION OF THE ONTOLOGICAL STRUCTURE OF THE REALITY INFORMATION SYSTEM PROGRAM</span>
                <span class="article-part">- PART ONE: MONITORING DEEP STATES OF REALITY AND DISSECTING THE COMPLEX INFORMATIONAL IMPACT ON THE COLLECTIVE HUMAN UNCONSCIOUS</span>
                <span class="article-subtitle">- 1.2. UNCOVERING THE HUMAN ILLUSION NETWORK</span>
            </a></li>
            <li><a href="Ar4.html">
                <span class="article-title">A SPECIAL DECONSTRUCTION OF THE ONTOLOGICAL STRUCTURE OF THE REALITY INFORMATION SYSTEM PROGRAM</span>
                <span class="article-part">- PART ONE: MONITORING DEEP STATES OF REALITY AND DISSECTING THE COMPLEX INFORMATIONAL IMPACT ON THE COLLECTIVE HUMAN UNCONSCIOUS</span>
                <span class="article-subtitle">- 1.3. THE PROCESS OF INEVITABLE PROJECTIONS AND REFLECTIONS</span>
            </a></li>
            <li><a href="Ar5.html">
                <span class="article-title">A SPECIAL DECONSTRUCTION OF THE ONTOLOGICAL STRUCTURE OF THE REALITY INFORMATION SYSTEM PROGRAM</span>
                <span class="article-part">- PART ONE: MONITORING DEEP STATES OF REALITY AND DISSECTING THE COMPLEX INFORMATIONAL IMPACT ON THE COLLECTIVE HUMAN UNCONSCIOUS</span>
                <span class="article-subtitle">- 1.4. DIFFERENT ANATOMY OF THE HUMAN EXISTENCE</span>
            </a></li>
        
        </ul>
    </aside>
</div>

    </div>

    <footer>
    <p>&copy; Хомам Ал Сафади </p>
        <nav>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
