# BA Time Tracker

### Description

A minimalistic and straightforward system to track tasks and the time they take. Compare time estimates by junior developers and supervisors against actual time spent, in order to drive optimization.

### How to run the system

### How to use the system

- `/user/login` - login with your credentials or create a new user
- `/tasks` - see the tasks that have been created, filter them based on title, responsible developer or creation date. Create new tasks.
- `/performance-overview` - see how time estimates for tasks compare between developers and supervisors against the time actually spent on the tasks. Filter data by task creation date and responsible developer.
- `/welcome-page` - landing page for anonymous users.

### Planned improvements

- Enhanced styling for a smoother user experience
- More precise routing that takes into account user role and displays only relevant content
- More robust user profile, that contains content relevant to the user (like only the tasks that they are assigned or that they supervise)
- Comments, links and related files on task content type to provide a more enhanced task tracking functionality.
- Additional feature of real time tracking to follow how long certain tasks take

### Known limitations and notes

- **Supervisor and developer options in dropdown menu for task creation/editing must be added by administrator manually for now.** Content type Task was initially created to reference Users by role for supervisor and asignee fields. Reasoning - to have selections for these fields updated automatically as soon as Users with respective roles are created. However, this prevented filtering by asignee in the View from working properly. Solutions that were tested:
  - Creating a relationship between View and referenced entity
  - Modules like BetterExposedFilters to try and configure the filter properly.

For now, the temporary workaround is simple selection.
