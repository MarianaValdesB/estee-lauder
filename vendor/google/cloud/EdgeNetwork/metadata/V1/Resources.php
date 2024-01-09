<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/edgenetwork/v1/resources.proto

namespace GPBMetadata\Google\Cloud\Edgenetwork\V1;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�1
+google/cloud/edgenetwork/v1/resources.protogoogle.cloud.edgenetwork.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
Zone
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A=
labels (2-.google.cloud.edgenetwork.v1.Zone.LabelsEntry
layout_name (	-
LabelsEntry
key (	
value (	:8:Z�AW
edgenetwork.googleapis.com/Zone4projects/{project}/locations/{location}/zones/{zone}"�
Network
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A@
labels (20.google.cloud.edgenetwork.v1.Network.LabelsEntry
description (	B�A
mtu (-
LabelsEntry
key (	
value (	:8:p�Am
"edgenetwork.googleapis.com/NetworkGprojects/{project}/locations/{location}/zones/{zone}/networks/{network}"�
Subnet
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A?
labels (2/.google.cloud.edgenetwork.v1.Subnet.LabelsEntry
description (	B�A;
network (	B*�A�A$
"edgenetwork.googleapis.com/Network
	ipv4_cidr (	
	ipv6_cidr (	
vlan_id	 (B�A>
state
 (2*.google.cloud.edgenetwork.v1.ResourceStateB�A-
LabelsEntry
key (	
value (	:8:m�Aj
!edgenetwork.googleapis.com/SubnetEprojects/{project}/locations/{location}/zones/{zone}/subnets/{subnet}"�
Interconnect
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AE
labels (25.google.cloud.edgenetwork.v1.Interconnect.LabelsEntry
description (	B�AZ
interconnect_type (2:.google.cloud.edgenetwork.v1.Interconnect.InterconnectTypeB�A
uuid (	B�A\'
device_cloud_resource_name (	B�A
physical_ports	 (	B�A-
LabelsEntry
key (	
value (	:8"D
InterconnectType!
INTERCONNECT_TYPE_UNSPECIFIED 
	DEDICATED:�A|
\'edgenetwork.googleapis.com/InterconnectQprojects/{project}/locations/{location}/zones/{zone}/interconnects/{interconnect}"�
InterconnectAttachment
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AO
labels (2?.google.cloud.edgenetwork.v1.InterconnectAttachment.LabelsEntry
description (	B�AE
interconnect (	B/�A�A)
\'edgenetwork.googleapis.com/Interconnect;
network (	B*�A�A$
"edgenetwork.googleapis.com/Network
vlan_id (B�A
mtu	 (>
state
 (2*.google.cloud.edgenetwork.v1.ResourceStateB�A-
LabelsEntry
key (	
value (	:8:��A�
1edgenetwork.googleapis.com/InterconnectAttachmentfprojects/{project}/locations/{location}/zones/{zone}/interconnectAttachments/{interconnect_attachment}"�
Router
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A?
labels (2/.google.cloud.edgenetwork.v1.Router.LabelsEntry
description (	B�A;
network (	B*�A�A$
"edgenetwork.googleapis.com/Network@
	interface (2-.google.cloud.edgenetwork.v1.Router.Interface=
bgp_peer (2+.google.cloud.edgenetwork.v1.Router.BgpPeer4
bgp	 (2\'.google.cloud.edgenetwork.v1.Router.Bgp>
state
 (2*.google.cloud.edgenetwork.v1.ResourceStateB�A!
route_advertisements (	B�A�
	Interface
name (	
	ipv4_cidr (	
	ipv6_cidr (	&
linked_interconnect_attachment (	

subnetwork (	
loopback_ip_addresses (	�
BgpPeer
name (	
	interface (	
interface_ipv4_cidr (	
interface_ipv6_cidr (	
peer_ipv4_cidr (	
peer_ipv6_cidr (	
peer_asn (
	local_asn (B�A9
Bgp
asn (%
keepalive_interval_in_seconds (-
LabelsEntry
key (	
value (	:8:m�Aj
!edgenetwork.googleapis.com/RouterEprojects/{project}/locations/{location}/zones/{zone}/routers/{router}";
LinkLayerAddress
mac_address (	

ip_address (	"~
SubnetStatus
name (	
mac_address (	K
link_layer_addresses (2-.google.cloud.edgenetwork.v1.LinkLayerAddress"�
InterconnectDiagnostics
mac_address (	K
link_layer_addresses (2-.google.cloud.edgenetwork.v1.LinkLayerAddressN
links (2?.google.cloud.edgenetwork.v1.InterconnectDiagnostics.LinkStatus�

LinkStatus

circuit_id (	X
lacp_status (2C.google.cloud.edgenetwork.v1.InterconnectDiagnostics.LinkLACPStatusZ
lldp_statuses (2C.google.cloud.edgenetwork.v1.InterconnectDiagnostics.LinkLLDPStatusX
packet_counts (2A.google.cloud.edgenetwork.v1.InterconnectDiagnostics.PacketCounts�
PacketCounts
inbound_unicast (
inbound_errors (
inbound_discards (
outbound_unicast (
outbound_errors (
outbound_discards (�
LinkLACPStatusX
state (2I.google.cloud.edgenetwork.v1.InterconnectDiagnostics.LinkLACPStatus.State
google_system_id (	
neighbor_system_id (	
aggregatable (

collecting (
distributing (".
State
UNKNOWN 

ACTIVE
DETACHED�
LinkLLDPStatus
peer_system_name (	
peer_system_description (	
peer_chassis_id (	
peer_chassis_id_type (	
peer_port_id (	
peer_port_id_type (	"�
RouterStatus8
network (	B\'�A$
"edgenetwork.googleapis.com/NetworkP
bgp_peer_status (27.google.cloud.edgenetwork.v1.RouterStatus.BgpPeerStatus�
BgpPeerStatus
name (	

ip_address (	
peer_ip_address (	Q
status (2A.google.cloud.edgenetwork.v1.RouterStatus.BgpPeerStatus.BgpStatus
state (	
uptime (	
uptime_seconds (O
prefix_counter (27.google.cloud.edgenetwork.v1.RouterStatus.PrefixCounter"*
	BgpStatus
UNKNOWN 
UP
DOWNz
PrefixCounter

advertised (
denied (
received (
sent (

suppressed (
	withdrawn (*�
ResourceState
STATE_UNKNOWN 
STATE_PENDING
STATE_PROVISIONING
STATE_RUNNING
STATE_SUSPENDED
STATE_DELETINGB�
com.google.cloud.edgenetwork.v1BResourcesProtoPZAcloud.google.com/go/edgenetwork/apiv1/edgenetworkpb;edgenetworkpb�Google.Cloud.EdgeNetwork.V1�Google\\Cloud\\EdgeNetwork\\V1�Google::Cloud::EdgeNetwork::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

