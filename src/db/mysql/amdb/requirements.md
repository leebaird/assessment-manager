# General Requirements

## users (user of the application)
- a user has a user name and password
- a user has a name
- a user's password is hashed with a salt
- a user has a user's role (admin, user, etc)
- a user has an activated flag (1:activated, 0:inactivated?)
- a user has an approved flag (1:approved, 0:disapproved?)

# Application Requirements

## assessments (lookup table)
- an assessment has a name

## status (lookup table)
- a status has a name ()
  + project status: contract, scoping, in progress, reporting, review, delivered, modified, complete
  + role status: active, inactive

## roles (lookup table)
- a role has a name (PM, Tech Lead, etc)

## employees (someone who works on a project)
- an employee has a name
- an employee has a contact info (address, phones, email)
- an employee has notes
- an amployee is an account manager (should this be a role?)

## clients
- a client has a name, a URL
- a client has one or more contacts
- a client has one or more locations (or addresses)

### client_locations
- a location has a contact info (address, phone, URL)

### client_contacts (someone who works for a client)
- a contact has a name
- a contact has a contact info (phones, email)

## projects
- a project has a name
- a project has a kickoff date
- a project has a start and end dates
- a project has tech_qa
- a project has notes

- a project is associated to one and only one assessment (assessmentID)
- a project is associated to one and only one client (clientID)
- a project is assigned with one or more status over time

### project_status (to keep a project's history)
- statusID (project status)
- created

### project_employees
- a project can be worked on by one or more employess

- projectID, employeeID, roleID
  (allows the same person to work on a project with multiple roles, billing purposes)
- status (role status)
- start
- end
- modified

### project_location_contacts (a poc from a client for a specific location)
- a project is associated to one or more contacts
- a project is associated to one and only one client's location

- projectID, locationID, contactID
- statusID (role status)
- modified

### project_locations (locations where the project is worked on)
- a project can be worked on from one or more locations

- locationID
- projectID

