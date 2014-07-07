EventOnXPlacedOrder
===================

Push an event on customer X placed order

This extension will push a new event when an order is completed.<br/>
The new event will contain the counter (number of) orders placed by the customer.<br/>

Event will include the order count of the customer:
<br/>
1st order: customer_1_placed_order,<br/>
second order: customer_2_placed_order <br/>
and so forth.<br/>
A hard coded cut-off is at 10 orders.<br/>

This will allow other events to take place on the customer's X order placed.<br/>

An example would be to send an email on a customers 1st placed order


