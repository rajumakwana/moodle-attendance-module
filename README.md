# Moodle Attendance Module

This is a custom Attendance activity module for Moodle. It allows teachers to create attendance sessions and record student attendance within a course.

## Features
- Create and manage attendance sessions
- Record student attendance (e.g., Present, Absent)
- View attendance records per session

## Installation
1. Copy the `attendance` folder into your Moodle `mod` directory:
   ```
   cp -r attendance /path/to/your/moodle/mod/
   ```
2. Log in to Moodle as an admin and complete the plugin installation process.

## File Structure
- `version.php` – Plugin version and requirements
- `db/install.xml` – Database tables for sessions and records
- `lang/en/attendance.php` – Language strings
- `lib.php` – Core logic and hooks
- `mod_form.php` – Activity settings form
- `view.php` – Main activity view
- `index.php` – List all attendance activities in a course

## Database Tables
- `attendance_sessions`: Stores session info (course, name, date)
- `attendance_records`: Stores attendance per user per session

## Usage
- Add an Attendance activity to your course
- Create sessions and mark attendance for students

## License
[GPLv3](https://www.gnu.org/licenses/gpl-3.0.html)

---
This is a basic scaffold. You can extend it with reporting, custom statuses, and more as needed.

this is testing