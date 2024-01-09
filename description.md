In this project we will provision 2 AWS EC2 instances, and a bastion host ,we will also create an Application load Balancer and Auto scailing group.

The Project Required us to.

Set up 2 EC2 instances on AWS(use the free tier instances).

- Deploy an Nginx web server on these instances(you are free to use Ansible) Ansible is a very easy-to-use automation tool. and might be the best practice for configuration. it’s also used for scalability.


- Set up an ALB(Application Load balancer) to route requests to your EC2 instances


-  Make sure that each server displays its own Hostname or IP address. You can use any programming language of your choice to display this.


5. Work on building a personal portfolio and
CV (Check out resumeworded.com).

Important points to note:

1. I should not be able to access your web servers through their respective IP addresses. Access must be only via the load balancer

2. You should define a logical network on the cloud for your servers.

3. Your EC2 instances must be launched

To proceed...

CREATE A VPC AND ASSOCIATED PUBLIC AND PRIVATE SUBNETS 
we are going to go to our AWS console to create a VPC with its private and public subnets (we will create 2 public and 2 private subnets).
![VPC CREATED](<Screenshot 2024-01-09 at 03.20.05.png>)

SUBNETS CREATED 
![SUBNETS CREATED](<Screenshot 2024-01-09 at 03.28.05.png>)

AN INTERNET GATEWAY AND ATTACH TO THE VPC WE CREATED

![IGW CREATED AND ATTACHED TO VPC](<Screenshot 2024-01-09 at 03.32.18.png>)

CREATE A NAT-GATEWAY (ALLOCATE AND ELASTIC IP)

![ELASTIC IP ATTACHED WHEN CREATING THE NAT GATEWAY](<Screenshot 2024-01-09 at 03.28.05-1.png>)

Create public and private route tables (attach private route table to NAT-gateway and puclic to igw and also edit subnet association connecting private subnets with private route table and also public subnets to public route table)

![ROUTE TABLES CREATED AND ATTACHED TO NAT AND IGW](<Screenshot 2024-01-09 at 03.40.22.png>)

WE ALSO CREATE THE SECURITY GROUPS BOTH PUBLIC AND PRIVATE.

EC2 INSTANCES 2 private instances and a bastion host (launc EC2 instances - do the linking to security group vpc and private networks for the private instance and alternatively for public instance we do the internet gateway)

create target group and attache private instances include as pending
![Target group created and are both healthy](<Screenshot 2024-01-09 at 07.22.34.png>)

create load balancers and link vpc

![application load balancer created](<Screenshot 2024-01-09 at 07.23.03.png>)

Connect to the bastion host instance (udate and install ansible)
run the ansible script to configure the instances 

![private instances configured successfully provisioned nginx](<Screenshot 2024-01-09 at 07.21.35.png>)

DNS of the load balancer we created is capied and Tested on browsers to test instances to see load sharing. and we can see IP changing as we reload, Access IP via the load balancer

![Access IP via the load balancer](<Screenshot 2024-01-09 at 07.27.46.png>)

![Access IP via the load balancer](<Screenshot 2024-01-09 at 07.27.56.png>)

FINALLY IN SETTING UP THE AUTO SCAILING 

We start by creating a snaption of an existing instance then create Image using the snapshot thereafter we launch a template
![Snapshop created](<Screenshot 2024-01-09 at 07.45.12.png>)


LAUNCHED TEMPLATE

![template launched ](<Screenshot 2024-01-09 at 07.51.50.png>)

once auto scailing group is created it, it will keep spinning new instances to balance load and keep application running nonstop.

![NEW INstances get created automatically as we terminate the existing instances](<Screenshot 2024-01-09 at 07.55.52.png>)