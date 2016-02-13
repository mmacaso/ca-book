#Project Management
While not explicitly project managers, all developers will do some degree of project management in their career and must understand the role of a project manager to work with them effectively. The content that follows describes some key concepts, tips, and techniques for doing basic project management.

Keep these tips in mind when planning or managing a product:
  * Agile is best
  * Think small
  * KISS - Keep it Simple, Stupid
  * Be concise
  * Use graphics
  * Rinse, **refine**, repeat

##Effective Communication
As a programmer, most communication takes place via email, chat, forums, and via project management systems like Jira. This is helpful for productivity but can make communication difficult for those unaccustomed to it. It takes practice to write and read effectively.

**Know your audience** - Get to know the people you are communicating with. What is his/her role? What is his goal? What is his personality type? What is his technical background? Is he a programmer? When working with someone for the first time, take time to get to know them personally so that you can better communicate with them.

**Know when a meeting or phone call is necessary** - Sometimes email and text chat is just a waste of time and gets in the way of good communication. It’s often easier to collaborate on difficult or complex problems face-to-face or over the phone or web meeting. Consider face-to-face meeting a tool that you can use to be more efficient. While a meeting may be helpful to you, it may be distracting and hurtful to the productivity of other attendees, so you must be careful to respect their needs as well.

**Be concise.**

**Maximise readability** - Structure your writing so that the reader can identify what he needs quickly and easily. Bolded text is helpful for identifying important parts. Briefly describing the nature of an email prior to communicating details is helpful. Using a separate paragraph for a detail can also be helpful.

**Be clear** - For example, if you need help, say “I need help.” This statement is simple and unambiguous. It clearly communicates a need and call to action from the reader.

**Avoid assumptions** - Make your assumptions clear and avoid making too many assumptions about the reader or his knowledge.

**Get to the point quickly** - So that the reader can respond quickly.

**Avoid dead-end and obvious statements** - For example, if you’re chatting with someone, avoid asking “Are you here?” - just ask the question. Another example, avoid stating that something simply “doesn’t work” - it will immediately prompt obvious questions like, “what did you try? What doesn’t work about it? What is the error message?”

##The Software Life Cycle
All businesses enforce different software life cycles but the following processes exist in different variations.

**Process** | **Description**
 ---------- | --------------
**Analysis** | Someone determines a business need and provides a specification based on the requirements.
**Development/Implementation** | A developer or team of developers implements a requirement.
**Quality Assurance** | In smaller businesses this is often completed solely by a programmer, but larger businesses will often a team of testers and implement a variety of QA measures: automated unit testing, functional/UI testing (with tools like Selenium), user acceptance testing, etc.
**Deployment and Delivery** | After a change is implemented and tested it will be deployed and distributed to users.
**Maintenance** | After a change is released it may enter a maintenance cycle for bug fixes and optimizations.

The Wikipedia page provides a simple overview of various models used: http://en.wikipedia.org/wiki/Software_development_process. Familiarize yourself with the benefits of each of them.

##Agile Development

![Image of Agile Development](https://github.com/CodingAvenue/ca-school-docs/blob/master-docs-1/images/agile.png)

Agile development is a method of software development and planning. It’s a very popular technique and it’s used by most modern software development companies in some variation. Agile development works by planning a chunk of **deliverable** work to be completed in a given time frame (a “sprint”), recognizing that changes to those places will incur delays, delivering that work to the end-user or stakeholder, reflecting on the progress, and repeating.

The most important thing to understand about agile development is that it is a philosophical approach to problems that will help you accomplish your goals (even outside of programming). It works by reflecting and consciously responding to change at regular intervals.

Within the realm of Agile development, the agile philosophy will take at least two primary forms: 1) sprint planning and 2) Scrum. Scrum is an implementation of the agile philosophy that takes place daily and ensures focus on the larger sprint. The Agile manifesto somewhat describes the premise of agile methodologies (http://www.agilemanifesto.org/) but it is open to interpretation.

What are some other ways that the Agile philosophy can be used?

##Good Specs
The challenge in producing good software specifications lies in **succinctly** and **unambiguously** describing a change. Face-to-face communication is naturally the best way to communicate large amounts of information quickly: communication overhead is practically non-existent. With face-to-face communication, an audience is able to ask questions and receive answers immediately. In addition, the audience is able to receive non-verbal information about the task. The down-side of face-to-face, verbal communication is that it largely goes undocumented and small conversations are easily forgotten. And when an incorrect assumption is made by a developer, it’s easy for those involved to pass the blame. It is often helpful to develop a spec collaboratively and document the requested change.

To efficiently write a software specification, one should consider the questions that would likely be asked by the implementers, what non-verbal information would be communicated, and what format would make the information easily understandable. The goal is to minimize specification-creation time and communication overhead.

http://www.microtoolsinc.com/Howsrs.php - This page provides a good overview. Some of its text is used below. It's impossible to write a perfect spec. Our goal is to modify the following factors so that implementation time is as low as possible and quality is as high as possible:
  * **Correctness**: The spec should obviously be correct. Write it and check it twice.
  * **Consistency**: A specification may not contradict itself. Vocabulary and implications should be the same throughout: If you call an input "Start and Stop" in one place, don't call it "Start/Stop" in another.
  * **Completeness**: All changes must be accounted for. To specify a change, you must also understand its consequences and provide accommodations for them.
  * **Conciseness**: Say only what needs to be said and nothing more. It's very easy to write a long and detailed specification, but it's rarely necessary. Writing a spec should not take longer than actually implementing the change.
  * **Verifiability**: Don't put in requirements like - "It should provide the user a fast response." Instead, provide a quantitative requirement like: "Every key stroke should provide a user response within 100 milliseconds."

Failure to provide adequate information above will result in increased communication overhead and prolonged development time. Be sure to include diagrams, mockups, images, and annotations when possible. Good specs take time to write but it should be treated as an investment in the product.

###Good Spec Goals
  * Avoid communication overhead
  * Avoid mistakes
  * Decrease development time
  * Reference documentation

###The Spec Checklist
  * Use simple and clear sentences. Avoid colloquial and slang English. Be concise.
  * Use lists, pseudocode, graphics, wireframes, mockups and other representational forms as often as possible
  * Verify that every detail has a clear relation to the big picture
  * Verify that each tech detail clearly defines intention and implementation. This provides increased clarity
  * If I showed this to a developer from another company, how much more information would he need? Less is better
  * Never assume that the reader understands implications. The writer must explore all implications and provide specification
  * Avoid providing large specifications. Think Agile.
  * Check and double-check your spec.

###A Spec Template
The following template has proved to work well with developers of varying skill levels and project familiarity:

  * **Introduction or History**
  
    To help the developer better understand product vision, goals, explain the reasoning for the requested change and provide historical information that may help them understand use cases and reasons for previous implementations (if any).
  * **Documentation References**
    
    Provide any relevant documentation and be sure to include references to the affected components.
  * **Intention**
    
    The Intention section may be an abstract or functional description of the desired change, and should explicitly define the intention or goal; the purpose of this is to allow the developer to make good assumptions if needed and avoid asking questions unnecessarily. The use of diagrams, wire-frames, mock-ups and illustrations can vastly improve the comprehensibility of a specification.
  * **Implementation**
    
    If supplying implementation information, describe in reasonable detail the change that should be made. Providing this information is particularly useful when working with a developer that is new to a project.
  * **Testing**
    
    Provide testing-related information such as use-cases, steps to reproduce issues, example data or inputs, or settings. This will help the developer ensure the software works before submitting it for review.
  * **Affected Components**
    
    List any components that may be affected. If additional testing for those components is required, list them in the Testing section.
  * **Estimated Implementation Time**
    
    This is a general estimate of project completion time. This information sets project expectations and allows it to be discussed before and during implementation if necessary.
  * **Deadline**
    
    The deadline defines when the project be completed.

###The Devil in the Details

  *A programmer is going to the grocery store and his wife tells him, "Buy a gallon of milk, and if there are eggs, buy a dozen." So the programmer goes, buys everything, and drives back to his house. Upon arrival, his wife angrily asks him, "Why did you get 13 gallons of milk?" The programmer says, "There were eggs!"*

Programming is all about details and programmers are literal because that is the nature of computing. One of the single biggest mistakes that specification writers create is being unable to verbalize a change resulting in a vague description or without detail. For example, a client may ask “Can you make me a website like FaceBook?” This type of request is particularly common from people who do not understand software. Facebook is a web site developed by hundreds of developers that services millions of users each day. It is feature-packed and accomplishes countless things not only in the front-end, but in the management backend. It is by no means a simple task. When presented with a request like this, one can only follow up with more questions. Avoid underestimating the size of a task and be willing to provide or consume details and more details.

##Prioritization
At businesses that are not strictly agile, and smaller companies without project managers, programmers are often left to prioritize tasks themselves. This process will vary depending on the situation, but it should be noted that in almost all scenarios, *bugs should be fixed first*. Adding new features before bugs are fixed is a recipe for disaster.

After bugs are fixed, one should follow the Eisenhower Decision Matrix when deciding what tasks to work on if no other direction is given. See here: http://www.artofmanliness.com/2013/10/23/eisenhower-decision-matrix/

![Image of Eisenhower Decision Matrix](https://github.com/CodingAvenue/ca-school-docs/blob/master-docs-1/images/eisenhower_decision_matrix.png)

##The Mythical Man-Month
At minimum, read chapters 1-4 in The Mythical Man Month.

##Task and Project Management Systems
While to-do lists can be efficient at managing small and personal projects, any significant project will almost inevitably end up using a full-fledged project management system like Jira from Atlassian, Bugzilla, Trac, etc. They provide a reliable method for tracking and documenting each phase of the software life-cycle while providing superb accountability for all parties involved. They should be used as the primary method of communication with developers.

Communicating project specifications and clarification directly to a developer through chat or email is not recommended (though it is sometimes necessary and more efficient in urgent situations). Circumventing a TMS hurts accountability and has the potential to create documentation gaps; using it correctly will improve efficiency, not hurt it.

The following suggestions will improve task management for both managers and developers:
  * Treat all task or ticket fields as required, and use them to accurately represent the change request: Is there a priority field? Use it, avoid using default values.
  * “Assignment” fields (who does this task belong to?) are very helpful for reporting and prevents tasks from being forgotten. Assign the task to whomever it currently requires work from and have other parties do the same.
  * Use a “Status” field to track development status. Developers and managers should change this field as progress is made.
  * Actively keep tickets organized, properly prioritized, and delete them if they are no longer valid. Do this at least once per week.
  * Monitor task activity as it occurs and be prepared to take action if necessary.
  * Respond to questions and inquiries as soon as possible. You can be preventing people from being productive.
  * Customize your project management system in a manner that suits the development process.
  * Implement the specification template fields in the TMS and write specifications there.
  * Split large projects into multiple tickets, and use a primary ticket to link to each sub-task. Jira accomplishes this using Epic tasks.
  * Use effective task summaries. Most tickets are some kind of enhancement, task, bug, or issue, so it’s not helpful to use a summary of “User Registration Issue.” Instead, use error messages and behavioral descriptions. Here are some examples:

Bad Descriptions | Good Descriptions
---------------- | -----------------
User registration issue | “Class not found” error while registering new user
Inventory search page doesn’t work | Inventory search by keyword returns 0 records
Sign-up Page Enhancements | Reduce number of clicks on sign-up page
Error | Page Not Found error when clicking Sign Up link

##Job Expectations
At the very least, a programmer must be able to:
  * Communicate effectively with other developers and project managers.
  * Develop useful specifications.
  * Identify software development life cycles.
  * Utilize various project management systems.
  * Be able to provide good software estimates.
  * Assess the risk of a change.
  * Juggle multiple priorities.

*Remember*: small, iterative, retrospective.
