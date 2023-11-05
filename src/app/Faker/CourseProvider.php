<?php

namespace App\Faker;

use Faker\Provider\Base;

class CourseProvider extends Base
{
    protected static $names = [
        "Introduction to Computer Science",
        "Web Development Fundamentals",
        "Data Structures and Algorithms",
        "Database Design and Management",
        "Mobile App Development",
        "Software Engineering Principles",
        "Network Security Basics",
        "Artificial Intelligence and Machine Learning",
        "Digital Marketing Strategies",
        "Graphic Design Fundamentals",
        "Introduction to Business Analytics",
        "Game Development Workshop",
        "Cybersecurity Essentials",
        "Cloud Computing Technologies",
        "User Experience Design",
        "Social Media Marketing",
        "IoT (Internet of Things) Applications",
        "Blockchain Fundamentals",
        "Digital Photography Techniques",
        "Project Management Fundamentals",
        "Computer Graphics and Animation",
        "Ethical Hacking and Cyber Defense",
        "Database Administration",
        "Web Application Security",
        "Computer Network Architecture",
        "Data Mining and Analysis",
        "E-commerce Strategies",
        "Software Testing and Quality Assurance",
        "Human-Computer Interaction",
        "Computer Forensics",
        "Cloud Security Management",
        "Mobile Game Development",
        "Big Data Analytics",
        "Wireless Communication Technologies",
        "Virtual Reality Development",
        "Social Network Analysis",
        "Digital Forensics",
        "Internet Security Protocols",
        "Machine Learning for Business",
        "Video Game Design and Production",
        "Information Retrieval",
        "Data Visualization Techniques",
        "Advanced Web Technologies",
        "Mobile Application Security",
        "Network Programming",
        "Natural Language Processing",
        "Parallel and Distributed Computing",
        "Game Engine Development",
        "Augmented Reality Applications"
    ];
    public function course(): string
    {
        return static::randomElement(static::$names);
    }
}