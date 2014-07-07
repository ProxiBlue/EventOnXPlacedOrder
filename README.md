EventOnXPlacedOrder
===================

Push an event ox customer X placed order

This extension will push a new event when an order is completed.<br/>
The new event will contain the counter (number of) orders placed by the customer.<br/><br/>

Thus if this is teh first order the event will be customer_1_placed_order, second order will be customer_2_placed_order and so forth.<br/>
A hard coded cut-off is at 10 orders.<br/>

This will allow other events to take place on the customers X order placed.<br/><br/>

An example would be to send an email on a customers 1st placed order


