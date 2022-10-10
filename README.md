# Bài tập lớn Công nghệ phần mềm - Quản lý rác thải
Urban waste management is one of several significant problems faced by many countries in the world and thus considered one of the important points to be improved in Sustainable Development Goal (SDG) 11: sustainable cities and communities and SDG 6: clean water and sanitation. Particular attention is given to developing countries that continue to prioritize development and economic growth. In urban context, solid waste management is costly and ineffective. Improvement of waste collection and management is emphasized by governments and organizations for positive impacts on cities, societies and environments.

Waste collection is often designated to an organization that provides professional waste management services. A typical waste collection process involves (1) back officers, who operate a central system to create calendar, coordinate front collectors and janitors, (2) collectors, who drive different types of vehicles and (3) janitors who manually collect garbage from Major Collecting Points (MCPs). Calendar and tasks are assigned among teams of janitors and coordinated by back officers. These assignments are often arranged in a weekly basic. Back officers also plan which vehicles to use and their routes. This planning activity happens every month. Everyday, the back officers sent messages with information about collecting route and time to collectors and janitors. Janitors use trollers to collect garbage in their assigned areas and deliver to the MCPs. Collectors will pick up garbage from all janitors at a MCP. One collector drives only one vehicle during his working shift. The collector will drive through several MCPs with a predetermined route by back officers.

Organization X is contracted to develop an information management system called UWC 2.0 in order to improve efficiency of garbage collection of service provider Y. The solution will include a Task Management module that allows:
Back officers to:
  1. Have an overview of janitors & collectors, their work calendar
  2. Have an overview of vehicles and their technical details (weight, capacity, fuel consumptions, etc)
  3. Have an overview of all MCPs and information about their capacity. Information should be updated from MCPs every 15 minutes with the availability of at least 95% of their operating time.
  4. Assign vehicles to janitors and collectors
  5. Assign janitors and collectors to MCPs (task)
  6. Create a route for each collector. Assigned route is optimized in term of fuel consumption & travel distance.
  7. Be able to send message to collectors & janitors

Collectors & janitors to:
  1. Have an overview of their work calendar
  2. Have a detail view of their task on a daily and weekly basic. All important information should be displayed in one view (without scrolling down). 
  3. Be able to communicate with collectors, other janitors & back officers. The messages should be communicated in a real-time manner with delay less than 1 second.
  4. Check in / check out task every day
  5. Be notified about the MCPs if they are fully loaded
  
There are some constraints to the development of UWC 2.0. There exists a current system UWC 1.0 with a database. UWC 2.0 is expected to import and to use the existing data from UWC 1.0. It is expected that the Task Management to be inter-operable with the UWC 1.0 as much as possible. The system should be able to handle real-time data from at least 1000 MCPs at the moment and 10.000 MCPs in five years. UWC 2.0 system interfaces should be in Vietnamese, with an opportunity to switch to English in the future.

Task 1: Requirement elicitation
1.1. Identify the context of this project. Who are relevant stakeholders? What are their current needs? What could be their current problem? In your opinion, what benefits will UWC 2.0 be for each stakeholder?

Context: urban waste management (environmental project)
Stakeholder: back officers, collectors, janitors
Needs:
  Back officers: system to manage schedules, routes, MCPs, sending info to janitors & collectors
  Collectors: co-ords to MCPs & vehicles
  Janitors: trollers & assigned areas
Current problems:
  Back officers: scheduling & routing, loaded MCPs or not, communication
  Collectors: loaded MCPs, communication
  Janitors: communication
Benefits:
  Back officers: cross-use with 1.0, ability to reuse old databases, ability to manage more MCPs
  Collectors: ease of access via language check
  Janitors: ease of access via language check

1.2. Describe all functional and non-functional requirements that can be inferred from the project description. Draw a use-case diagram for the whole system.

Functional:
  Overview of janitors & collectors, their work calendar, vehicles and their technical details (weight, capacity, fuel consumptions, etc), all MCPs and information about their capacity.
  Assignment of vehicles to janitors & collectors, janitors & collectors to MCPs (task)
  Route creation for each collector.
  Detail view of their task on a daily and weekly basic.
  Ability to communicate with collectors, other janitors & back officers.
  Check in / check out task every day
  Be notified about the MCPs if they are fully loaded

Non-functional:
  Information should be updated from MCPs every 15 minutes with the availability of at least 95% of their operating time. (performance efficiency)
  Delay less than 1 second. (performance efficiency)
  Assigned route is optimized in term of fuel consumption & travel distance. (portability)
  All important information should be displayed in one view (without scrolling down). (usability)
  Import & use the existing data from UWC 1.0, inter-operable with the UWC 1.0 (maintainability)
  Handle real-time data from at least 1000 MCPs at the moment and 10000 MCPs in five years (performance efficiency)
  UWC 2.0 system interfaces should be in Vietnamese, with an opportunity to switch to English in the future. (usability)


1.3. For the Task assignment module, draw its use-case diagram and describe the use-case using a table format.

Task 2: System modelling
2.1	Draw an activity diagram to capture the business process between systems and the stakeholders in Task Assignment module.

2.2	Propose a conceptual solution for the route planning task and draw a sequence diagram to illustrate it.


2.3	Draw a class diagram of Task Assignment module as comprehensive as possible.



Task 3:

Task 4:

Task 5:
