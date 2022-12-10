# Bài tập lớn Công nghệ phần mềm - Quản lý rác thải
Urban waste management is one of several significant problems faced by many countries in the world and thus considered one of the important points to be improved in Sustainable Development Goal (SDG) 11: sustainable cities and communities and SDG 6: clean water and sanitation. Particular attention is given to developing countries that continue to prioritize development and economic growth. In urban context, solid waste management is costly and ineffective. Improvement of waste collection and management is emphasized by governments and organizations for positive impacts on cities, societies and environments.

Waste collection is often designated to an organization that provides professional waste management services. A typical waste collection process involves (1) back officers, who operate a central system to create calendar, coordinate front collectors and janitors, (2) collectors, who drive different types of vehicles and (3) janitors who manually collect garbage from Major Collecting Points (MCPs). Calendar and tasks are assigned among teams of janitors and coordinated by back officers. These assignments are often arranged in a weekly basis. Back officers also plan which vehicles to use and their routes. This planning activity happens every month. Everyday, the back officers sent messages with information about collecting route and time to collectors and janitors. Janitors use trollers to collect garbage in their assigned areas and deliver to the MCPs. Collectors will pick up garbage from all janitors at a MCP. One collector drives only one vehicle during his working shift. The collector will drive through several MCPs with a predetermined route by back officers.

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

---Task 1: Requirement elicitation---
1.1. Identify the context of this project. Who are relevant stakeholders? What are their current needs? What could be their current problem? In your opinion, what benefits will UWC 2.0 be for each stakeholder?

Context: urban waste management (environmental project)
Stakeholder: back officers, collectors, janitors
Needs:
  Back officers: system to manage schedules, routes, MCPs, sending info to janitors & collectors
  Collectors: co-ords to MCPs & vehicles
  Janitors: trolleys & assigned areas
Current problems:
  Back officers: scheduling & routing, loaded MCPs or not, communicating with others
  Collectors: loaded MCPs, communicating with others
  Janitors: communicating with others
Benefits:
  Back officers: cross-use with 1.0, ability to reuse old databases, ability to manage more MCPs
  Collectors: ease of access via language check
  Janitors: ease of access via language check

1.2. Describe all functional and non-functional requirements that can be inferred from the project description. Draw a use-case diagram for the whole system.

Functional:
  Overview of janitors & collectors, their work calendar, vehicles and their technical details (weight, capacity, fuel consumptions, etc), all MCPs and information about their capacity
  Assignment of vehicles to janitors & collectors, janitors & collectors to MCPs (task)
  Route creation for each collector
  Detail view of their task on a daily & weekly basis
  Ability to communicate with collectors, other janitors & back officers
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

---Task 2: System modelling---
2.1	Draw an activity diagram to capture the business process between systems and the stakeholders in Task Assignment module.

Stakeholders: Back officers

2.2	Propose a conceptual solution for the route planning task and draw a sequence diagram to illustrate it.
Concept: route planning based on a satelite map API
Vì việc thiết kế đường đi là công việc của Back officer, actor duy nhất trong module này là Back officer.

Back officer sẽ có 2 lựa chọn khi đăng nhập vào hệ thống thiết kế đường đi: tạo đường đi mới hoặc gán đường đi cho collector.

Nếu nhấn nút “Tạo đường đi mới”, hệ thống sẽ cho phép Back officer tạo đường đi từ vị trí hiện tại (trụ sở chính), đi qua các MCP (dựa trên danh sách các MCP được chọn). Cụ thể, nếu back officer chọn MCP lần đầu thì sẽ tạo đường đi mới từ trụ sở đến vị trí của MCP đó. Nếu chọn lần tiếp theo thì hệ thống sẽ tạo đường đi mới và ghép nối với đường đi khởi đầu để tạo thành đường đi mới.

Nếu nhấn nút "Gán đường đi cho Collector", hệ thống sẽ hiện ra danh sách các đường đi đã tạo. Back officer có thể gán các đường đi đó cho các collector. Tiếp theo, hệ thống sẽ hiện ra danh sách phương tiện và cho phép Back officer gán phương tiện vào collector. Cuối cùng, hệ thống sẽ hiện ra danh sách collector & cho phép Back officer chọn collector để đi trên đường đi đã chọn. Sau khi đã chọn đường đi cho các collector, hệ thống sẽ tiến hành xác nhận & cập nhật danh sách đường đi (thêm thông tin về collector & phương tiện) trong database đường đi, cập nhật danh sách collector (thêm thông tin về đường đi & phương tiện sử dụng) trong database collector và cập nhật danh sách phương tiện (thêm thông tin về collector vận hành & đường đi) trong database phương tiện.

2.3	Draw a class diagram of Task Assignment module as comprehensive as possible.


---Task 3: Architecture design---
3.1	Describe an architectural approach you will use to implement the desired system. How many modules are you planning for the whole UWC 2.0 system? Briefly describe the input, output and function of each module.

Architectual approach: MVC
Model: employee (janitor, collector & back officer), vehicle, task, schedule, MCP, area,...
View: home, login, dashboard,...
Controller: assign, edit, delete (back officer), login, view profile,...

Task Assignment
Input: danh sách các tasks, employee
Output: danh sách các employee
Function: gán nhiệm vụ cho nhân viên

Task Management
Input: danh sách các task
Output: danh sách các task
Function: thêm, sửa, xóa, xem danh sách các task của mọi nhân viên

Task Overview
Input:
Output: task list
Function: xem các task được giao

Vehicle Assignment
Input: danh sách các vehicles, collectors
Output: danh sách các vehicle
Function: giao vehicle cho các collector

Vehicle Management
Input: danh sách các vehicle
Output: danh sách các vehicle
Function: thêm, sửa, xóa các vehicle trong danh sách

Vehicle Overview
Input: danh sách các vehicle
Output: vehicle được giao
Function: hiển thị vehicle được giao

Schedule Assignment
Input: tasks
Output: schedules
Function: giao việc cho janitors/collectors

Schedule Management
Input: schedules
Output: schedules
Function: thêm, sửa, xóa, xem danh sách các schedule

Schedule Overview
Input:
Output: schedules
Function: hiển thị schedules của janitors/collectors

MCP Assignment
Input: danh sách các vehicles
Output: danh sách MCPs được giao
Function: giao MCPs cho từng vehicle

MCP Management
Input: danh sách MCPs được giao
Output: danh sách MCPs được giao
Function: thêm, sửa, xóa, xem danh sách các MCPs được giao

MCP Overview
Input: 
Output: danh sách MCPs được giao
Function: hiển thị danh sách MCPs được giao

Area Assignment
Input: areas, janitors
Output: danh sách areas
Function: giao việc cho janitors ở từng area

Area Management
Input: danh sách areas
Output: danh sách areas
Function: thêm, sửa, xóa, xem danh sách các Area

Area Overview
Input: 
Output: danh sách areas
Function: hiển thị các areas mà janitors cần đi

Route Assignment
Input: routes, collectors
Output: collectors
Function: gán routes vào collectors 

Route Management
Input: MCPs, routes
Output: routes
Function: thêm, sửa, xóa, xem danh sách các Route

Route Overview
Input: 
Output: danh sách các routes
Function: cho phép collectors thấy được route cần đi

Notifications management
Input: danh sách các notification
Output: danh sách các notification
Function: thêm, sửa, xóa, xem danh sách các notification

3.2	Draw an implementation diagram for the Task Assignment module

Task 4: Implementation - Sprint 1
4.1	Setting up. The team creates an online repository (GitHub, BitBucket, etc) for version control. No need for a database to store all menu items, customers, etc. Data can be hard coded in code files.

4.2	Adding documents, materials and folders for Requirement, System modelling and Architectural design. Use the selected version control system to report the changes to these files.

4.3	Implement MVP1 – design an interface of either a Desktop-view central dashboard for Task Management for back-officers OR a Mobile-view Task assignment for Janitors and Collectors. Decide yourself what to include in the view. Design use a wireframe tool. 

Task 5: