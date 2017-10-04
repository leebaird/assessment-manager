# General Requirements

## users (user of the application)
- A user has a user name and password
- A user has a name
- A user's password is hashed with a salt
- A user has a user's role (admin, user, etc)
- A user has an activated flag (1:activated, 0:inactivated?)
- A user has an approved flag (1:approved, 0:disapproved?)

# Application Requirements

## assessments (lookup table)
- An assessment has a name

## status (lookup table)
- A status has a name ()
  + project status: contract, scoping, in progress, reporting, review, delivered, modified, complete
  + role status: active, inactive

## roles (lookup table)
- A role has a name (Project Mgr, Lead consultant, Consultant)

## employees (someone who works on a project)
- An employee has a name
- An employee has a contact info (address, phones, email)
- An employee has notes
- An amployee is an account manager (should this be a role?)

## clients
- A client has a name and URL
- A client has one or more contacts
- A client has one or more locations (or addresses)

### client_locations
- A location has a contact info (address, city, state, zip, phone)

### client_contacts (someone who works for a client)
- A contact has a name
- A contact has a contact info (phones, email)

## projects
- A project has a name
- A project has a kickoff date
- A project has a start and end dates
- A project has tech_qa
- A project has notes

- A project is associated to one and only one assessment (assessmentID)
- A project is associated to one and only one client (clientID)
- A project is assigned with one or more status over time

### project_status (to keep a project's history)
- statusID (project status)
- created

### project_employees
- A project can be worked on by one or more employess

- projectID, employeeID, roleID
  (allows the same person to work on a project with multiple roles, billing purposes)
- status (role status)
- start
- end
- modified

### project_location_contacts (a POC from a client for a specific location)
- A project is associated to one or more contacts
- A project is associated to one and only one client's location

- projectID, locationID, contactID
- statusID (role status)
- modified

### project_locations (locations where the project is worked on)
- A project can be worked on from one or more locations

- locationID
- projectID

